<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Account Created</title>
</head>
<body>
<h2>Account Created Successfully</h2>
    <p>Hello {{ $name }},</p>
    <p>We are pleased to inform you that your account has been created successfully.</p>
    <p>Your account password has been set by the administrator. If you wish to change your password ({{ $password }}), you can do so by logging into your account and navigating to the account settings.</p>
    <p>Thank you for being a part of our community!</p>
    <p>Best regards,<br>{{ config('app.name') }}</p>
</body>
</html>
