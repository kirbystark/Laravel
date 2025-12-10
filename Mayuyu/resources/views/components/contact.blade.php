@include('components.header')

    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #d3d3d2ff, #392d7aff);
            padding: 0;
        }

        .contact-container {
            width: 1200px;
            margin: 0 auto;
            background: transparent;
            padding: 30px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 40px;
        }

        .contact-section {
            margin-bottom: 25px;
        }

        .contact-item {
            background: #eeeeee;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 10px;
            font-size: 15px;
        }

        .social-links a {
            display: block;
            padding: 12px;
            background: #ddd;
            border-radius: 8px;
            margin-bottom: 10px;
            text-decoration: none;
            color: black;
            font-weight: bold;
            transition: 0.3s;
        }

        .social-links a:hover {
            background: #bfbfbf;
        }
        
        .icon {
            width: 20px;
            height: 20px;
            vertical-align: middle;
            margin-right: 8px;
        }

    </style>
</head>

<body>
    <div class="contact-container">
        <h2>Contact Information</h2>

        <div class="contact-section">
            <h3>Your Contacts</h3>
            <div class="contact-item">Kirby Mayuyu — 0975 723 5610</div>
            <div class="contact-item">Email — mayuyukirby@gmail.com</div>
            <div class="contact-item">Address — #68 Manansala St., Sitio Mangga Pulungbulu, Angeles City, Pampanga</div>
        </div>

        <div class="contact-section">
            <h3>Social Media</h3>
            <div class="social-links">
                <a href="https://www.facebook.com/kirbymyy">
                    <img src="{{ asset('images/facebook.jpg') }}" class="icon"> Facebook: Kirby Mayuyu
                </a>

                <a href="https://www.instagram.com/kirbsmyy/">
                    <img src="{{ asset('images/instagram.jpg') }}" class="icon"> Instagram: @kirbsmyy
                </a>

                <a href="https://github.com/kirbystark">
                    <img src="{{ asset('images/github.png') }}" class="icon"> Github: kirbystark
                </a>

            </div>
        </div>
    </div>

    @include('components.footer')
    
</body>
</html>
