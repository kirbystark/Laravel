@include('components.header')

<h2>Dashboard</h2>

<p>Welcome, {{ auth()->user()->name }}!</p>

<hr>

<h3>Your Account Details</h3>
<ul>
    <li><strong>Name:</strong> {{ auth()->user()->name }}</li>
    <li><strong>Email:</strong> {{ auth()->user()->email }}</li>
</ul>

<hr>

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit">Logout</button>
</form>

@include('components.footer')
