{{-- resources/views/emails/custom-reset-password.blade.php --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Password Reset</title>
</head>
<body>
<h2>Password Reset</h2>
    <p>Hello {{ $user->name }},</p>
    <p>You are receiving this email because we received a password reset request for your account.</p>
    <p>Please click the following link to reset your password:</p>
    <p><a href="{{ url('password/reset', $token) }}">Reset Password</a></p>
    <p>If you did not request a password reset, no further action is required.</p>
    <p>Thanks,<br>{{ config('app.name') }}</p>
</body>
</html>
