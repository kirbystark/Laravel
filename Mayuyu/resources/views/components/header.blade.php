<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            background: #dddbd5ff;
            font-family: Arial, sans-serif;
        }

        header {
            background: linear-gradient(135deg, #535245ff, #CDCCC0);
            color: #dddbd5ff;
            padding: 15px 30px;
            font-size: 30px;
            font-weight: bold;
            flex-shrink: 0;
        }

        footer {
            background: transparent;
            padding: 10px;
            text-align: center;
            font-size: 14px;
            flex-shrink: 0;
        }

        .page-content {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .auth-container {
            width: 380px;
            background: linear-gradient(135deg, #535245ff, #CDCCC0);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        .auth-container h2 {
            text-align: center;
            color: black;
            margin-bottom: 20px;
        }

        .auth-container p {
            margin-bottom: 5px;
            color: black;
            font-size: 14px;
        }

        .auth-container input[type="text"],
        .auth-container input[type="email"],
        .auth-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }

        .auth-container input[type="submit"] {
            width: 100%;
            padding: 12px;
            background: #292929ff;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
        }

        .auth-container input[type="submit"]:hover {
            background: #777777ff;
        }

        .switch-link {
            margin-top: 10px;
            text-align: center;
            font-size: 14px;
        }

        .switch-link a {
            color: #3387e7ff;
            text-decoration: none;
        }

        .switch-link a:hover {
        text-decoration: underline;
        }

        .error-box p {
            color: red;
            font-size: 13px;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <header>
        My Portfolio
    </header>
