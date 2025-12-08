@include('components.header')

<div class="page-content">
    <div class="auth-container">
        <h2>Create Account</h2>

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
            <input type="text" name="name" value="{{ old('name') }}">

            <p>Email</p>
            <input type="email" name="email" value="{{ old('email') }}">

            <p>Password</p>
            <input type="password" name="password">

            <p>Confirm Password</p>
            <input type="password" name="password_confirmation">

            <input type="submit" value="Register">
        </form>

        <div class="switch-link">
            Already have an account? <a href="{{ route('login') }}">Login</a>
        </div>
    </div>
</div>

@include('components.footer')
