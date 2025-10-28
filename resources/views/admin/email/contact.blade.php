<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Contact Registered - MetaDigital Marketing</title>
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
            border-top: 5px solid #dc3545;
        }
        .heading {
            font-size: 22px;
            font-weight: 700;
            color: #dc3545;
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
            background: #FFF5F5;
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
            background-color: #dc3545;
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
        <div class="heading">📢 New Contact Registration Alert</div>
        
        <div class="content">
            Hello <strong>Admin</strong>,<br><br>
            A new contact has just registered on <strong>MetaDigital Marketing</strong>.  
            Please review the details below and take necessary action (approve/verify).
        </div>

        <div class="info">
            <strong>Name:</strong> {{ $contact->name }}<br>
            <strong>Email:</strong> {{ $contact->email }}<br>
            @if (!empty($contact->phone))
                <strong>Phone:</strong> {{ $contact->phone }}<br>
            @endif
            @if (!empty($contact->address))
                <strong>Address:</strong> {{ $contact->address }}<br>
            @endif
            <strong>Registered At:</strong> {{ $contact->created_at }}
        </div>

        <div style="text-align: center;">
            <a href="{{ url('/admin/contacts') }}" class="btn">Review Contact</a>
        </div>

        <div class="footer">
            This is an automated system notification from <strong>MetaDigital Marketing</strong>.  
            Please log in to the admin panel to manage this contact.
        </div>
    </div>
</body>
</html>
