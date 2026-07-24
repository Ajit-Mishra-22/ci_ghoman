<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;

class Contact extends BaseController
{
    public function index(): string
    {
        helper('form');
        return view('contact');
    }

    public function send()
    {
        // Validate form input
        $rules = [
            'name'    => 'required|min_length[2]|max_length[100]',
            'email'   => 'required|valid_email|max_length[150]',
            'phone'   => 'permit_empty|max_length[30]',
            'topic'   => 'permit_empty|max_length[200]',
            'message' => 'required|min_length[10]|max_length[5000]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('validation', $this->validator);
        }

        // Gather clean data
        $data = [
            'name'    => $this->request->getPost('name'),
            'email'   => $this->request->getPost('email'),
            'phone'   => $this->request->getPost('phone') ?? '',
            'topic'   => $this->request->getPost('topic') ?? '',
            'message' => $this->request->getPost('message'),
        ];

        // Load email config
        $emailConfig = new \Config\Email();
        $emailService = \Config\Services::email();

        // Use the authenticated account as From (required by SMTP server)
        $emailService->setFrom($emailConfig->fromEmail, $emailConfig->fromName);
        // Set the user's email as Reply-To so replies go to them
        $emailService->setReplyTo($data['email'], $data['name']);

        $emailService->setTo('hello@ghoman.ca');
        // $emailService->setTo('ajitkm22@gmail.com');

        $emailService->setSubject('New Contact Form Inquiry — ' . esc($data['name']));

        // Build HTML message body using the email template
        $messageBody = view('emails/contact_admin', ['data' => $data]);
        $emailService->setMessage($messageBody);
        $emailService->setMailType('html');

        // Attempt to send
        if ($emailService->send()) {
            return redirect()->to('/contact')->with('success', 'Thank you, ' . esc($data['name']) . '! Your message has been sent successfully. We will get back to you within 24 hours.');
        }

        // Log the error for debugging
        log_message('error', 'Contact email send failed: ' . $emailService->printDebugger(['headers']));

        return redirect()->to('/contact')->withInput()->with('error', 'Sorry, something went wrong while sending your message. Please try again or email us directly at hello@ghoman.ca.');
    }
}

