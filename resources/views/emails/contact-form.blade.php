<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
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
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            color: white;
            padding: 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 700;
        }
        .header p {
            margin: 10px 0 0;
            opacity: 0.9;
            font-size: 16px;
        }
        .content {
            padding: 40px 30px;
        }
        .field-group {
            margin-bottom: 25px;
            border-left: 4px solid #3b82f6;
            padding-left: 20px;
            background-color: #f8fafc;
            padding: 20px;
            border-radius: 8px;
        }
        .field-label {
            font-weight: 600;
            color: #1e40af;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }
        .field-value {
            font-size: 16px;
            color: #374151;
            word-wrap: break-word;
        }
        .message-field {
            background-color: #fff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 20px;
            margin-top: 10px;
        }
        .footer {
            background-color: #f3f4f6;
            padding: 30px;
            text-align: center;
            border-top: 1px solid #e5e7eb;
        }
        .footer p {
            margin: 0;
            color: #6b7280;
            font-size: 14px;
        }
        .company-info {
            background: linear-gradient(135deg, #059669 0%, #10b981 100%);
            color: white;
            padding: 20px;
            text-align: center;
            margin-top: 20px;
            border-radius: 8px;
        }
        .company-info h3 {
            margin: 0 0 10px;
            font-size: 20px;
        }
        .company-info p {
            margin: 5px 0;
            opacity: 0.9;
        }
        .priority-high {
            background-color: #fef2f2;
            border-left-color: #ef4444;
        }
        .priority-high .field-label {
            color: #dc2626;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🌍 New Contact Inquiry</h1>
            <p>Arfan Express Limited - Global Logistics Solutions</p>
        </div>

        <div class="content">
            <div class="field-group">
                <div class="field-label">👤 Contact Person</div>
                <div class="field-value"><strong>{{ $name }}</strong></div>
            </div>

            <div class="field-group">
                <div class="field-label">📧 Email Address</div>
                <div class="field-value">
                    <a href="mailto:{{ $email }}" style="color: #3b82f6; text-decoration: none;">{{ $email }}</a>
                </div>
            </div>

            @if($phone)
            <div class="field-group">
                <div class="field-label">📱 Phone Number</div>
                <div class="field-value">
                    <a href="tel:{{ $phone }}" style="color: #3b82f6; text-decoration: none;">{{ $phone }}</a>
                </div>
            </div>
            @endif

            @if($company)
            <div class="field-group">
                <div class="field-label">🏢 Company Name</div>
                <div class="field-value"><strong>{{ $company }}</strong></div>
            </div>
            @endif

            @if($service)
            <div class="field-group">
                <div class="field-label">🚢 Service Interest</div>
                <div class="field-value">
                    <span style="background-color: #3b82f6; color: white; padding: 5px 15px; border-radius: 20px; font-size: 14px; font-weight: 500;">
                        {{ ucwords(str_replace('-', ' ', $service)) }}
                    </span>
                </div>
            </div>
            @endif

            <div class="field-group priority-high">
                <div class="field-label">💬 Message</div>
                <div class="message-field">
                    <div class="field-value">{{ $message }}</div>
                </div>
            </div>

            <div class="field-group">
                <div class="field-label">⏰ Submitted On</div>
                <div class="field-value">{{ $submittedAt }}</div>
            </div>
        </div>

        <div class="company-info">
            <h3>Arfan Express Limited</h3>
            <p>📍 Gulshan-01, Dhaka-1212, Bangladesh</p>
            <p>📞 +880 171 1560 113 | ✉️ info@arfanexpressbd.com</p>
            <p style="font-size: 12px; margin-top: 15px; opacity: 0.8;">
                Connecting Global Destinations with Reliable Logistics Solutions
            </p>
        </div>

        <div class="footer">
            <p>This email was sent from your website's contact form.</p>
            <p>Please respond to the customer within 24 hours for optimal service.</p>
        </div>
    </div>
</body>
</html> 