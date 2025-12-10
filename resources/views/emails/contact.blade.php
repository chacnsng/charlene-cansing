<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f6f6f6;
            padding: 30px;
        }
        .email-container {
            background: #ffffff;
            border-radius: 6px;
            padding: 25px;
            max-width: 600px;
            margin: auto;
            border: 1px solid #e5e7eb;
        }
        h2 {
            color: #111827;
            font-weight: 600;
            margin-bottom: 20px;
        }
        p {
            color: #374151;
            line-height: 1.6;
            font-size: 15px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            color: #6b7280;
            font-size: 13px;
        }
        .label {
            font-weight: bold;
            color: #111827;
        }
    </style>
</head>
<body>

    <div class="email-container">
        <h2>📩 New Contact Form Message</h2>

        <p><span class="label">Name:</span> {{ $data['name'] }}</p>
        <p><span class="label">Email:</span> {{ $data['email'] }}</p>
        <p><span class="label">Message:</span></p>
        <p>{{ $data['message'] }}</p>

        <div class="footer">
            This message was sent from your portfolio contact page.
        </div>
    </div>

</body>
</html>
