@component('mail::message')
# Hello {{ $user->name }}

You just logged into the application.

Thanks,<br>
{{ config('app.name') }}
@endcomponent


<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <form method="POST" action="{{ url('/login') }}">
        @csrf
        <label>Email</label>
        <input type="email" name="email" required>
        <br>
        <label>Password</label>
        <input type="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
    @if ($errors->any())
        <div>{{ $errors->first() }}</div>
    @endif
</body>
</html>
