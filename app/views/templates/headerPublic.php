<?php
if (isset($_SESSION['auth']) && $_SESSION['auth'] == 1) {
    header('Location: /home');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="icon" href="/favicon.png">
    <title>My PHP-MVC!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .welcome-container {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .register-container {
          background-color: #ffffff;
          border-radius: 5px;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
          padding: 30px;
          width: 400px;
          text-align: center;
        }

        .login-container {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        h1 {
            color: #333333;
            margin-bottom: 20px;
        }

        .error-message {
          color: #ff0000;
          margin-bottom: 10px;
          font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
          width: 100%;
          padding: 10px;
          margin-bottom: 15px;
          border: 1px solid #cccccc;
          border-radius: 3px;
          box-sizing: border-box;
        }

        input[type="submit"] {
          background-color: #4CAF50;
          color: #ffffff;
          padding: 10px 20px;
          border: none;
          border-radius: 3px;
          cursor: pointer;
        }

        input[type="submit"]:hover {
          background-color: #45a049;
        }

        p {
          margin-top: 20px;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
</head>
<body>