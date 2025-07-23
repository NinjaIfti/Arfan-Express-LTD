<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Arfan Express LTD</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: linear-gradient(135deg, #059669 0%, #10b981 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
        }
        .header p {
            margin: 15px 0 0;
            opacity: 0.9;
            font-size: 16px;
        }
        .content {
            padding: 40px 30px;
        }
        .welcome-message {
            background-color: #f0fdf4;
            border-left: 4px solid #10b981;
            padding: 25px;
            border-radius: 8px;
            margin-bottom: 30px;
        }
        .welcome-message h2 {
            margin: 0 0 15px;
            color: #059669;
            font-size: 20px;
        }
        .welcome-message p {
            margin: 0;
            color: #374151;
            font-size: 16px;
        }
        .next-steps {
            background-color: #eff6ff;
            border: 1px solid #dbeafe;
            border-radius: 8px;
            padding: 25px;
            margin: 30px 0;
        }
        .next-steps h3 {
            margin: 0 0 15px;
            color: #1e40af;
            font-size: 18px;
        }
        .next-steps ul {
            margin: 0;
            padding-left: 20px;
            color: #374151;
        }
        .next-steps li {
            margin-bottom: 8px;
        }
        .contact-info {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            color: white;
            padding: 25px;
            border-radius: 8px;
            text-align: center;
            margin: 30px 0;
        }
        .contact-info h3 {
            margin: 0 0 15px;
            font-size: 20px;
        }
        .contact-info p {
            margin: 8px 0;
            opacity: 0.9;
        }
        .contact-info a {
            color: #bfdbfe;
            text-decoration: none;
        }
        .service-highlight {
            background-color: #3b82f6;
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 14px;
            font-weight: 500;
            display: inline-block;
            margin: 10px 0;
        }
        .footer {
            background-color: #f3f4f6;
            padding: 30px;
            text-align: center;
            border-top: 1px solid #e5e7eb;
        }
        .footer p {
            margin: 5px 0;
            color: #6b7280;
            font-size: 14px;
        }
        .social-links {
            margin: 20px 0;
            text-align: center;
        }
        .social-links a {
            display: inline-block;
            margin: 0 10px;
            color: #6b7280;
            font-size: 14px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>✅ Thank You, {{ $name }}!</h1>
            <p>Your message has been received successfully</p>
        </div>

        <div class="content">
            <div class="welcome-message">
                <h2>We've Got Your Message</h2>
                <p>Thank you for reaching out to Arfan Express Limited. We appreciate your interest in our logistics services and will respond to your inquiry promptly.</p>
            </div>

            @if($service)
            <div style="text-align: center; margin: 25px 0;">
                <p style="margin-bottom: 10px; color: #6b7280;">You're interested in:</p>
                <div class="service-highlight">
                    🚢 {{ ucwords(str_replace('-', ' ', $service)) }}
                </div>
            </div>
            @endif

            <div class="next-steps">
                <h3>📋 What Happens Next?</h3>
                <ul>
                    <li><strong>Within 2 hours:</strong> We'll acknowledge your request during business hours</li>
                    <li><strong>Within 24 hours:</strong> Our logistics expert will contact you with a detailed response</li>
                    <li><strong>Personalized Quote:</strong> If applicable, we'll prepare a customized shipping solution</li>
                    <li><strong>Follow-up:</strong> We'll schedule a consultation call if needed</li>
                </ul>
            </div>

            <div class="contact-info">
                <h3>🌍 Arfan Express Limited</h3>
                <p><strong>Connecting Global Destinations</strong></p>
                <p>📍 Gulshan-01, Dhaka-1212, Bangladesh</p>
                <p>📞 <a href="tel:+8801711560113">+880 171 1560 113</a></p>
                <p>✉️ <a href="mailto:info@arfanexpressbd.com">info@arfanexpressbd.com</a></p>
                <p style="font-size: 14px; margin-top: 20px; opacity: 0.8;">
                    Business Hours: Sunday-Thursday 9:00 AM - 6:00 PM | Saturday 9:00 AM - 2:00 PM
                </p>
            </div>

            <div style="background-color: #fef3c7; border: 1px solid #f59e0b; border-radius: 8px; padding: 20px; text-align: center;">
                <p style="margin: 0; color: #92400e; font-weight: 500;">
                    💡 <strong>Need Immediate Assistance?</strong><br>
                    Call us directly at <a href="tel:+8801711560113" style="color: #92400e;">+880 171 1560 113</a> or chat with us on 
                    <a href="https://wa.me/8801711560113" style="color: #92400e;">WhatsApp</a>
                </p>
            </div>
        </div>

        <div class="footer">
            <p><strong>Arfan Express Limited</strong></p>
            <p>Your trusted partner in global logistics solutions</p>
            <p>AIN NO: 101080094</p>
            
            <div class="social-links">
                <a href="mailto:info@arfanexpressbd.com">Email</a> •
                <a href="tel:+8801711560113">Phone</a> •
                <a href="https://wa.me/8801711560113">WhatsApp</a>
            </div>
            
            <p style="font-size: 12px; margin-top: 20px; color: #9ca3af;">
                This is an automated confirmation email. Please do not reply to this email.
            </p>
        </div>
    </div>
</body>
</html> 