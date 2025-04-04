<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting Portal</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            font-family: 'Poppins', sans-serif;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            overflow: hidden;
        }

        h1, p {
            font-size: 28px;
            text-align: center;
            font-weight: 600;
            opacity: 0;
            animation: fadeInText 1.5s ease forwards;
        }

        h1 {
            font-size: 48px;
            color: #fff;
            margin-bottom: 20px;
        }

        p {
            margin: 10px 0;
            font-size: 22px;
            font-weight: 400;
            line-height: 1.5;
        }

        button {
            padding: 15px 30px;
            font-size: 24px;
            font-weight: bold;
            background-color: #FF5733;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.2);
        }

        button:hover {
            transform: translateY(-10px);
            box-shadow: 0px 20px 25px rgba(0, 0, 0, 0.4);
        }

        .container {
            text-align: center;
            animation: slideIn 1.2s ease-out forwards;
        }

        @keyframes fadeInText {
            0% { opacity: 0; transform: translateY(50px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        @keyframes slideIn {
            0% { transform: translateY(100vh); }
            100% { transform: translateY(0); }
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the Online Voting Portal</h1>
        <p>of the Election Commission of India</p>
        <p>To cast your vote online, please follow the instructions below:</p>
        <a href="voter_id_form">
            <button type="button">CLICK HERE TO VOTE</button>
        </a>
    </div>
</body>
</html>
