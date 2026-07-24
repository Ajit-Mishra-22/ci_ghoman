<?php
/** @var array $data */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #4f46e5 0%, #06b6d4 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 { font-size: 28px; margin-bottom: 10px; }
        .content { padding: 30px 20px; }
        .detail-section {
            margin: 20px 0;
            border-bottom: 1px solid #e0e0e0;
            padding-bottom: 15px;
        }
        .detail-section:last-child { border-bottom: none; }
        .detail-label {
            font-weight: 600;
            color: #4f46e5;
            font-size: 12px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        .detail-value {
            color: #333;
            font-size: 14px;
            word-break: break-word;
        }
        .message-content {
            background-color: #f9f9f9;
            padding: 15px;
            border-radius: 4px;
            border-left: 4px solid #4f46e5;
            font-style: italic;
            color: #555;
        }
        .action-buttons {
            margin-top: 25px;
            display: flex;
            gap: 10px;
            justify-content: center;
        }
        .action-buttons a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4f46e5;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 600;
        }
        .action-buttons a:hover { background-color: #3730a3; }
        .footer {
            background-color: #f4f4f4;
            padding: 20px;
            text-align: center;
            border-top: 1px solid #e0e0e0;
            font-size: 12px;
            color: #666;
        }
        .priority-badge {
            display: inline-block;
            background-color: #fef3c7;
            color: #92400e;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: 600;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <h1>📬 New Contact Submission</h1>
            <p>New inquiry received from contact form</p>
        </div>

        <!-- Main Content -->
        <div class="content">
            <div class="priority-badge">⏰ NEW SUBMISSION</div>

            <!-- Contact Information -->
            <div class="detail-section">
                <div class="detail-label">👤 Contact Name</div>
                <div class="detail-value"><?= esc($data['name'] ?? 'N/A') ?></div>
            </div>

            <div class="detail-section">
                <div class="detail-label">📧 Email Address</div>
                <div class="detail-value">
                    <?php $email = $data['email'] ?? ''; ?>
                    <a href="mailto:<?= esc($email) ?>" style="color: #4f46e5; text-decoration: none;">
                        <?= esc($email) ?>
                    </a>
                </div>
            </div>

            <div class="detail-section">
                <div class="detail-label">📱 Phone Number</div>
                <div class="detail-value">
                    <?php $phone = $data['phone'] ?? ''; ?>
                    <?php if (! empty($phone)): ?>
                        <a href="tel:<?= esc($phone) ?>" style="color: #4f46e5; text-decoration: none;">
                            <?= esc($phone) ?>
                        </a>
                    <?php else: ?>
                        <em>Not provided</em>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="detail-section">
                <div class="detail-label">🎯 Service Interested In</div>
                <div class="detail-value"><?= esc($data['topic'] ?? 'Not specified') ?></div>
            </div>

            <!-- Message -->
            <div class="detail-section">
                <div class="detail-label">💬 Message</div>
                <div class="message-content">
                    <?= nl2br(esc($data['message'] ?? '')) ?>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="action-buttons">
                <a href="mailto:<?= esc($email) ?>">📧 Reply to Inquiry</a>
                
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p style="margin-bottom: 10px;">Automated notification from Ghoman IT Solutions Contact Form</p>
            <p>Submitted on: <?= date('F d, Y H:i:s') ?> UTC</p>
        </div>
    </div>
</body>
</html>


