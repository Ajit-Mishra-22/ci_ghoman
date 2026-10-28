<?php

namespace App\Controllers;

use CodeIgniter\HTTP\ResponseInterface;

class ChatBot extends BaseController
{
    public function respond(): ResponseInterface
    {
        $payload = $this->request->getJSON(true);
        if (! is_array($payload) || ! is_string($payload['visitor_id'] ?? null) || ! is_string($payload['message'] ?? null)) {
            return $this->response->setStatusCode(400)->setJSON(['error' => 'Please provide a valid visitor ID and message.']);
        }

        $visitorId = trim($payload['visitor_id']);
        $message = trim($payload['message']);

        if (! preg_match('/\A[0-9a-f-]{36}\z/i', $visitorId)) {
            return $this->response->setStatusCode(400)->setJSON(['error' => 'Please refresh the page and try again.']);
        }

        if ($message === '' || mb_strlen($message) > 1000) {
            return $this->response->setStatusCode(400)->setJSON(['error' => 'Please enter a message of 1,000 characters or fewer.']);
        }

        $db = db_connect();
        $table = $db->table('chat_bots');
        $visitor = $table->where('visitor_id', $visitorId)->get()->getRowArray();

        if ($visitor === null) {
            $now = date('Y-m-d H:i:s');
            $table->insert([
                'visitor_id' => $visitorId,
                'visitor_name' => null,
                'visitor_phone' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
            $visitor = ['visitor_name' => null, 'visitor_phone' => null];
        }

        $phone = $this->extractPhone($message);
        if ($phone !== null) {
            $table->where('visitor_id', $visitorId)->update([
                'visitor_phone' => $phone,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

            $reply = empty($visitor['visitor_name'])
                ? 'Thanks, I’ve saved your phone number. What name should I call you?'
                : 'Thanks, I’ve saved your phone number. How can I help you today?';

            return $this->response->setJSON(['reply' => $reply]);
        }

        $name = $this->extractName($message);
        if (empty($visitor['visitor_name']) && $name !== null) {
            $table->where('visitor_id', $visitorId)->update([
                'visitor_name' => $name,
                'updated_at' => date('Y-m-d H:i:s'),
            ]);

            $reply = "Nice to meet you, {$name}! I'm Leela, Ghoman IT Solutions' AI assistant. I can help with our AI, software, cloud, cybersecurity, analytics, and web services. What would you like to know?";
            if (empty($visitor['visitor_phone'])) {
                $reply .= ' Also, what phone number is best for our team to reach you?';
            }

            return $this->response->setJSON([
                'reply' => $reply,
                'visitor_name' => $name,
            ]);
        }

        $reply = $this->getReply($message);
        if ($reply === null) {
            $reply = "I can help with Ghoman IT Solutions' services, including AI & machine learning, custom software and apps, cloud infrastructure, cybersecurity, analytics, web hosting, and digital marketing. What would you like to explore?";
        }

        if (empty($visitor['visitor_name'])) {
            $reply .= "\n\nBefore we continue, what name should I call you?";
        } elseif (empty($visitor['visitor_phone'])) {
            $reply .= "\n\nWhat phone number is best for our team to reach you?";
        } else {
            $reply = "Hi {$visitor['visitor_name']}! " . $reply;
        }

        return $this->response->setJSON([
            'reply' => $reply,
            'visitor_name' => $visitor['visitor_name'] ?? null,
        ]);
    }

    private function getReply(string $message): ?string
    {
        $text = mb_strtolower($message);

        if (preg_match('/\A(?:hi|hello|hey|good morning|good afternoon|good evening)[!. ]*\z/', $text)) {
            return "Hi! I'm Leela, Ghoman IT Solutions' AI assistant. How can I help you today?";
        }

        if (preg_match('/\b(contact|email|phone|call|talk to|speak to|address|location|office)\b/', $text)) {
            return 'You can reach Ghoman IT Solutions at hello@ghoman.ca or call +1 (587) 736-2288 (Canada) or +91 83604 22303 (India).';
        }

        if (preg_match('/\b(price|pricing|cost|quote|estimate|budget)\b/', $text)) {
            return 'Project pricing depends on your goals and requirements. Share a few details through our contact page or email hello@ghoman.ca, and the team can discuss a tailored estimate.';
        }

        if (preg_match('/\b(ai|artificial intelligence|machine learning| ml)\b/', $text)) {
            return 'Ghoman IT Solutions provides AI and machine-learning services, helping businesses plan and build intelligent solutions. We can also discuss how AI fits your specific project. Tell me what you are hoping to build.';
        }

        if (preg_match('/\b(software|web development|website|web app|application|app development|mobile app|custom development)\b/', $text)) {
            return 'We build custom software, websites, and applications for business needs. Tell me about your idea, required features, and target users, and our team can help you choose a next step.';
        }

        if (preg_match('/\b(cloud|infrastructure|hosting|server|web hosting)\b/', $text)) {
            return 'Our services include cloud infrastructure and web hosting. We can help with planning, setup, and reliable hosting tailored to your application.';
        }

        if (preg_match('/\b(cybersecurity|security|secure|vulnerability)\b/', $text)) {
            return 'We provide cybersecurity services to help businesses improve their security posture. Contact hello@ghoman.ca to discuss your environment and requirements.';
        }

        if (preg_match('/\b(analytics|data|business intelligence|reporting)\b/', $text)) {
            return 'Ghoman IT Solutions offers data analytics services to help turn business data into useful insights. Tell me what data or reporting challenge you are working on.';
        }

        if (preg_match('/\b(seo|digital marketing|marketing)\b/', $text)) {
            return 'Our services include SEO and digital marketing to help businesses improve their online presence. Contact hello@ghoman.ca to talk about your goals.';
        }

        if (preg_match('/\b(service|services|what do you do|what can you do)\b/', $text)) {
            return 'We offer AI & machine learning, custom software and app development, cloud infrastructure, cybersecurity, analytics, web hosting, and SEO & digital marketing.';
        }

        if (preg_match('/\b(career|careers|job|jobs|hiring)\b/', $text)) {
            return 'You can find opportunities on our Careers page. If you have a question for the team, email hello@ghoman.ca.';
        }

        return null;
    }

    private function extractName(string $message): ?string
    {
        $candidate = null;
        $explicitName = false;
        if (preg_match('/\A(?:(?:hi|hello|hey)[, ]+)?(?:my name is|i am|i\'m|this is)\s+([\p{L}][\p{L} .\'-]{0,79})[!.? ]*\z/iu', $message, $matches)) {
            $candidate = trim($matches[1]);
            $explicitName = true;
        } elseif ($this->getReply($message) === null && preg_match('/\A[\p{L}][\p{L} .\'-]{0,79}\z/iu', $message)) {
            $candidate = trim($message);
        }

        $words = $candidate === null ? [] : preg_split('/\s+/', $candidate);
        if (
            $candidate === null
            || mb_strlen($candidate) < 2
            || (! $explicitName && count($words) > 3)
            || preg_match('/\A(i|im|my|the|a|an|we|you|it|this|that|please|can|what|how|where|why|when|who|thanks|thank|hello|hi|hey|yes|no|okay|ok|help|services|looking|need|want|good)\b/iu', $candidate)
        ) {
            return null;
        }

        return $candidate;
    }

    private function extractPhone(string $message): ?string
    {
        if (! preg_match('/\A(?:my (?:phone|mobile|cell)(?: number)? is\s*)?(\+?[0-9][0-9\s().-]{5,24})\z/iu', trim($message), $matches)) {
            return null;
        }

        $digits = preg_replace('/\D/', '', $matches[1]);
        if ($digits === null || strlen($digits) < 7 || strlen($digits) > 15) {
            return null;
        }

        return (str_starts_with(trim($matches[1]), '+') ? '+' : '') . $digits;
    }
}
