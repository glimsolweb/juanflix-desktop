<div>

    <p>Hello <strong>{{ $user }} </strong></p>

    <p>Your One Time Password (OTP) is:</p>

    <strong>{{ $otp }} </strong>

    <p>This code is valid for the next 5 minutes.<br>
    Please do not share it with anyone for your security.</p>

    <p>If you did not request this code, please ignore this email or contact our support team immediately.</p>

    </p>Thanks,</p><br>
    {{ config('app.name') }}
</div>
