<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background: linear-gradient(135deg, #d3d3d2ff, #392d7aff);
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    /* Center form vertically but allow scrolling */
    .page-wrapper {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 0;
    }

    .auth-container {
        width: 350px;
        background: #5e5e5eff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 1);
    }

    .auth-container h1 {
        margin-bottom: 20px;
        color: black;
    }

    .auth-container h2 {
        margin-bottom: 20px;
        color: black;
    }

    .auth-container p {
        margin: 0 0 5px;
        color: black;
        font-size: 14px;
    }

    .auth-container input[type="email"],
    .auth-container input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ddd;
        border-radius: 6px;
        font-size: 14px;
    }

    .auth-container input[type="submit"] {
        width: 100%;
        padding: 10px;
        background: #292929ff;
        color: white;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 15px;
        transition: 0.3s;
    }

    .auth-container input[type="submit"]:hover {
        background: #777777ff;
    }

    .error-box p {
        background: #ffe6e6;
        padding: 8px;
        border-left: 4px solid red;
        margin-bottom: 10px;
        border-radius: 4px;
        color: #a10000;
        font-size: 13px;
    }

    .switch-link {
        text-align: center;
        margin-top: 10px;
        font-size: 14px;
    }

    .switch-link a {
        color: #3387e7ff;
        text-decoration: none;
    }

    .switch-link a:hover {
        text-decoration: underline;
    }
</style>

<div class="page-wrapper">
    <div class="auth-container">
        <h1>Kirby's Portfolio</h1>
        <h2>Login</h2>

        @if ($errors->any())
            <div class="error-box">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <p>Email</p>
            <input type="email" name="email" required>

            <p>Password</p>
            <input type="password" name="password" required>

            <input type="submit" value="Login">
        </form>

        <div class="switch-link">
            Don't have an account?
            <a href="{{ route('register') }}">Register here</a>
        </div>

    </div>
</div>

@include('components.footer')
