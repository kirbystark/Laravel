@include('components.header')

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background: #f3f6fa;
    }

    .dashboard-wrapper {
        max-width: 900px;
        margin: 40px auto;
        padding: 20px;
    }

    .dashboard-card {
        background: linear-gradient(135deg, #ffffff, #eef3ff);
        padding: 30px;
        border-radius: 14px;
        box-shadow: 0 6px 18px rgba(0,0,0,0.08);
    }

    .dashboard-card h2 {
        margin-top: 0;
        font-size: 28px;
        color: #2c3e50;
        text-align: center;
    }

    .welcome-text {
        text-align: center;
        font-size: 18px;
        color: #555;
        margin-bottom: 25px;
    }

    .section-title {
        margin-top: 25px;
        font-size: 20px;
        color: #2c3e50;
        border-left: 4px solid #4A90E2;
        padding-left: 10px;
    }

    ul.account-details {
        list-style: none;
        padding: 0;
        margin-top: 10px;
    }

    ul.account-details li {
        background: #fff;
        padding: 10px 15px;
        border-radius: 8px;
        margin-bottom: 8px;
        border: 1px solid #dfe6f3;
        font-size: 15px;
        color: #444;
    }

    .logout-btn {
        margin-top: 30px;
        display: block;
        width: 100%;
        padding: 12px;
        text-align: center;
        background: #e74c3c;
        color: #fff;
        font-size: 16px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: 0.3s;
    }

    .logout-btn:hover {
        background: #c0392b;
    }
</style>

<div class="dashboard-wrapper">
    <div class="dashboard-card">

        <h2>Dashboard</h2>

        <p class="welcome-text">
            Welcome back, <strong>{{ auth()->user()->name }}</strong> 👋
        </p>

        <h3 class="section-title">Your Account Details</h3>

        <ul class="account-details">
            <li><strong>Name:</strong> {{ auth()->user()->name }}</li>
            <li><strong>Email:</strong> {{ auth()->user()->email }}</li>
        </ul>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>

    </div>
</div>

@include('components.footer')
