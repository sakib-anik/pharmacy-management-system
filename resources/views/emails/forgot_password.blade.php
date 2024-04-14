@component('mail::message')
    Hi, {{ $user->name }}. Forgot Your Password?

    <p>It happens. Click the link below to reset your password.</p>
    @component('mail::button',['url' => url('reset/'.$user->remember_token)])
        Reset your Password
    @endcomponent
    <p>
    ! in case you have any issue recovering your passcode, please contact us using the form from contact-us page
    </p><br/> Thanks <br/>
    {{ config('app.name') }}
@endcomponent
