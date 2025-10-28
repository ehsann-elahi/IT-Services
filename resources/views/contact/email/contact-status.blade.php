<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Welcome to MetaDigital Marketing</title>
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #F8F9FA;
            padding: 30px;
        }
        .container {
            background: #FFFFFF;
            border-radius: 10px;
            padding: 30px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
            border-top: 5px solid #6F42C1;
        }
        .heading {
            font-size: 24px;
            font-weight: 700;
            color: #6F42C1;
            margin-bottom: 20px;
            text-align: center;
        }
        .content {
            font-size: 16px;
            color: #555555;
            line-height: 1.6;
        }
        .info {
            margin-top: 20px;
            font-size: 15px;
            background: #F4F0FB;
            padding: 15px;
            border-radius: 8px;
        }
        .footer {
            margin-top: 30px;
            font-size: 13px;
            color: #999;
            text-align: center;
        }
        .btn {
            margin-top: 25px;
            padding: 12px 24px;
            background-color: #6F42C1;
            color: #fff;
            text-decoration: none;
            border-radius: 25px;
            display: inline-block;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="heading">Welcome to MetaDigital, {{ $contact->name }} 🎉</div>
        
        <div class="content">
            Thank you for connecting with <strong>MetaDigital Marketing Team</strong>!  
            Your contact has been successfully registered and is now pending approval by our admin team.  
            <br><br>
            We truly appreciate your interest in collaborating with us. Once your account is approved, you’ll receive a confirmation email and gain full access to your contact panel.
        </div>

        <div class="info">
            <strong>Registered Email:</strong> {{ $contact->email }}<br>
            @if (!empty($contact->phone))
                <strong>Phone:</strong> {{ $contact->phone }}<br>
            @endif
            @if (!empty($contact->address))
                <strong>Address:</strong> {{ $contact->address }}
            @endif
        </div>

        <div style="text-align: center;">
            <a href="{{ url('/') }}" class="btn">Visit Our Website</a>
        </div>

        <div class="footer">
            This is an automated message from <strong>MetaDigital Marketing</strong>.  
            Please do not reply directly to this email.
        </div>
    </div>
</body>
</html>
