<?php
if (!isset($_SESSION['auth']) || $_SESSION['auth'] != 1) {
    header('Location: /login');
    exit();
}
  $username = $_SESSION['username'];
  $currentDate = date('l, F jS, Y');

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Reminder App</title>
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

            .error-message {
              color: #ff0000;
              margin-bottom: 10px;
              font-weight: bold;
            }
        </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Set Reminders</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <?php if (isset($_SESSION['username'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/reminder">My Reminders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout">Logout</a>
                        </li>
                    <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/user/register">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/user/login">Login</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>