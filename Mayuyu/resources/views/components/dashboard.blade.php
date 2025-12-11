@include('components.header')
    <style>


        html, body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #d3d3d2ff, #392d7aff);
        }

        body{
            min-height: 100vh;
        }

        .hero {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: flex-start;  
            align-items: center;
            padding-left: 80px;            
        }

        .hero-container {
            display: flex;
            align-items: center;
            gap: 120px;                    
        }

        .image-box {
            width: 600px;
            height: 550px;
            overflow: hidden;      
        }

        .image-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;    
            object-position: center;
        }

        .text-box {
            line-height: 1.15;
        }

        .text-box .small {
            font-size: 26px;            
        }

        .text-box h1 {
            font-size: 100px;         
            font-weight: bold;
            margin-left: 20px;
        }

        .text-box .sub {
            margin-top: 15px;
            font-size: 20px;            
            color: black;
            margin-left: 200px;
        }
    </style>
</head>

<body>

    <section class="hero">
        <div class="hero-container">
            <div class="image-box">
                <img src="images/profile.jpg" alt="Profile Image">
            </div>

            <div class="text-box">
                <p class="small">Hi, I’m</p>
                <h1>KIRBY<br>MAYUYU</h1>
                <p class="sub">welcome to my Portfolio</p>
            </div>

        </div>
    </section>

</body>

@include('components.footer')
