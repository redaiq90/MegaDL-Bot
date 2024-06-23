<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telegram Bot Features</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        header {
            background: url('https://via.placeholder.com/1200x400') no-repeat center center;
            background-size: cover;
            color: #fff;
            text-align: center;
            padding: 100px 20px;
            position: relative;
        }
        header::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5);
        }
        header h1 {
            font-size: 3em;
            z-index: 1;
            position: relative;
        }
        header p {
            font-size: 1.5em;
            z-index: 1;
            position: relative;
        }
        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }
        .feature {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin: 20px;
            padding: 20px;
            width: 30%;
            transition: transform 0.3s;
        }
        .feature:hover {
            transform: translateY(-10px);
        }
        .feature h2 {
            font-size: 1.5em;
            margin-bottom: 10px;
        }
        .feature p {
            font-size: 1em;
            margin-bottom: 10px;
        }
        footer {
            background-color: #0088cc;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            margin-top: 20px;
        }
        @media (max-width: 768px) {
            .feature {
                width: 80%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Welcome to Our Telegram Bot</h1>
            <p>Experience the future of automated interactions</p>
        </header>
        <section class="features">
            <div class="feature">
                <h2>Automated Responses</h2>
                <p>Our bot can handle your queries and respond to your needs instantly.</p>
            </div>
            <div class="feature">
                <h2>Real-Time Updates</h2>
                <p>Get the latest updates as they happen, directly from our bot.</p>
            </div>
            <div class="feature">
                <h2>Custom Commands</h2>
                <p>Tailor the bot's functionality with custom commands that suit your requirements.</p>
            </div>
        </section>
        <footer>
            <p>&copy; 2024 Telegram Bot. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
