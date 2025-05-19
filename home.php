<?php
    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Home</title>
    <style>
        body {
            font-family: 'Courier New', monospace;
            background-color: #1a1a1a;
            color: #00ff00;
            margin: 0;
            padding: 0;
            image-rendering: pixelated;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 4px solid #00ff00;
            box-shadow: 0 0 20px #00ff00;
        }

        header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px dashed #00ff00;
            padding-bottom: 20px;
        }

        h1 {
            font-size: 2.5rem;
            text-shadow: 3px 3px 0 #007700;
            letter-spacing: 2px;
        }

        .pixel-art {
            width: 100px;
            height: 100px;
            margin: 0 auto;
            background-color: #00ff00;
            image-rendering: pixelated;
            position: relative;
        }

        .pixel-art::before {
            content: "";
            position: absolute;
            width: 20px;
            height: 20px;
            background-color: #ff00ff;
            top: 10px;
            left: 10px;
        }

        .pixel-art::after {
            content: "";
            position: absolute;
            width: 10px;
            height: 10px;
            background-color: #ffff00;
            bottom: 10px;
            right: 10px;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin: 30px 0;
        }

        nav a {
            color: #00ff00;
            text-decoration: none;
            border: 2px solid #00ff00;
            padding: 8px 16px;
            font-weight: bold;
        }

        nav a:hover {
            background-color: #00ff00;
            color: #1a1a1a;
        }

        .content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        .card {
            border: 2px solid #00ff00;
            padding: 15px;
            min-height: 100px;
        }

        footer {
            text-align: center;
            margin-top: 30px;
            border-top: 2px dashed #00ff00;
            padding-top: 20px;
            font-size: 0.8rem;
        }

        /* Pixel animation */
        @keyframes blink {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.5; }
        }

        .blink {
            animation: blink 1s step-end infinite;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="pixel-art"></div>
            <h1>PIXEL<span class="blink">_</span>WORLD</h1>
            <p>8-bit inspired digital space</p>
        </header>

        <nav>
            <a href="#">HOME</a>
            <a href="#">ABOUT</a>
            <a href="#">GAMES</a>
            <a href="#">CONTACT</a>
            <a href="logout.php">LOGOUT</a>
        </nav>

        <div class="content">
            <div class="card">
                <h2>NEWS</h2>
                <p>Latest updates from our pixel universe...</p>
            </div>
            <div class="card">
                <h2>FEATURES</h2>
                <p>Discover retro-style creations...</p>
            </div>
        </div>

        <footer>
            <p>© 2023 PIXEL_WORLD | ALL RIGHTS RESERVED</p>
            <p>MADE WITH ♥ IN 8-BIT</p>
        </footer>
    </div>
</body>
</html>