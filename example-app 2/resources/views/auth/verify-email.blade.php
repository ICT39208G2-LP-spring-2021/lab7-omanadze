<p>click the email verification link</p>

<form action="/email/verification-notification" method="post">
    @csrf 
    <button>resend email</button>
</form>

@if(session()->has('success'))
<div>{{session('message')}}</div>
@endif