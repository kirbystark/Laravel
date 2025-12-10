
<head>
     <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            flex-direction: column;
            font-family: Arial, sans-serif;
        }

        header {
            position: relative;
            background: #082f6eff;
            color: white;
            padding: 15px 30px 10px 30px; 
            flex-shrink: 0;
        }

        header .title {
            font-size: 40px;
            font-weight: bold;
        }

        .logout-btn {
            position: absolute;
            top: 15px;
            right: 30px;
            padding: 8px 15px;
            background: #ef4444;
            color: white;
            border-radius: 5px;
            text-decoration: none;
            font-size: 15px;
            transition: 0.2s;
        }

        .logout-btn:hover {
            background: #dc2626;
        }

        header nav {
            margin-top: 20px;
            display: flex;
            justify-content: flex-end;
            gap: 20px;
        }

        header nav a {
            color: white;
            text-decoration: none;
            font-size: 15px;
            font-weight: bold;
            opacity: 0.9;
            transition: 0.2s;
        }

        header nav a:hover {
            opacity: 1;
        }
    </style>
</head>

<body>

<header>
    <div class="title">My Portfolio</div>

    <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>

    <nav>
        <a href="dashboard">Home</a>
        <a href="projects">Projects</a>
        <a href="contact">Contact</a>
        <a href="about">About</a>
    </nav>
</header>

</body>
