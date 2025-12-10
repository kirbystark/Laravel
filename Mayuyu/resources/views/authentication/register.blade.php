<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background: #dddbd5ff;
        margin: 0;
        padding: 0;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }

    .page-wrapper {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 40px 0;
    }

    .auth-container {
        width: 350px;
        background: linear-gradient(135deg, #535245ff, #CDCCC0);
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .auth-container h2 {
        text-align: center;
        margin-bottom: 20px;
        color: black;
    }

    .auth-container p {
        margin: 0 0 5px;
        color: black;
        font-size: 14px;
    }

    .auth-container input[type="text"],
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
</head>

<body>
<div class="page-wrapper">
    <div class="auth-container">

        <h2>Register</h2>

        @if ($errors->any())
            <div class="error-box">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif

        <form action="{{ route('register') }}" method="POST">
            @csrf

            <p>Name</p>
            <input type="text" name="name" value="{{ old('name') }}" required>

            <p>Email</p>
            <input type="email" name="email" value="{{ old('email') }}" required>

            <p>Password</p>
            <input type="password" name="password" required>

            <p>Confirm Password</p>
            <input type="password" name="password_confirmation" required>

            <input type="submit" value="Register">
        </form>

        <div class="switch-link">
            Already have an account?
            <a href="{{ route('login') }}">Login here</a>
        </div>

    </div>
</div>

@include('components.footer')
</body>
</html>