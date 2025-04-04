<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Election Commission of India</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&family=Oswald:wght@500&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #1c92d2, #f2fcfe);
            color: black;
            overflow-x: hidden;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        .home {
            background-image: url('VOTE.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            height: 85vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            animation: fadeIn 2s ease-in-out;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 2;
            max-width: 80%;
            padding: 20px;
        }

        h1 {
            font-size: 3rem;
            font-family: 'Oswald', sans-serif;
            margin-bottom: 20px;
            font-weight: 700;
            color: #f39c12;
            animation: slideInDown 1.5s ease forwards;
        }

        h1 span.election_c {
            font-size: 1.5rem;
            display: block;
            color: #f1c40f;
            font-weight: 400;
            animation: slideInRight 1.5s ease forwards;
        }

        hr {
            width: 60%;
            margin: 20px auto;
            border: none;
            height: 3px;
            background-color: #f1c40f;
            animation: slideInLeft 1s ease forwards;
        }

        marquee {
            font-size: 2rem;
            font-weight: bold;
            color: #e67e22;
            animation: pulse 1.5s infinite;
        }

        .nav nav ul {
            display: flex;
            justify-content: space-around;
            list-style: none;
            background-color: rgba(255, 153, 0, 0.9);
            padding: 15px;
            animation: fadeIn 2s ease forwards;
        }

        .nav nav ul li {
            padding: 10px;
            border-radius: 5px;
        }

        .nav nav ul li a {
            color: white;
            text-decoration: none;
            font-size: 1.2rem;
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            background: #e67e22;
            transition: background 0.3s, color 0.3s;
        }

        .nav nav ul li a:hover {
            background: #d35400;
            color: #ddd;
        }

        button {
            padding: 15px 40px;
            font-size: 1.5rem;
            font-weight: bold;
            background: linear-gradient(45deg, #27ae60, #2ecc71);
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s, box-shadow 0.3s;
            box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.2);
            margin: 20px 0;
            animation: bounceIn 1.5s ease forwards;
        }

        button:hover {
            background: linear-gradient(45deg, #2ecc71, #27ae60);
            transform: scale(1.05);
            box-shadow: 0px 20px 30px rgba(0, 0, 0, 0.3);
        }

        a {
            text-decoration: none;
            color: white;
        }

        footer {
            background-color: #34495e;
            color: white;
            text-align: center;
            padding: 20px 0;
            font-size: 1.1rem;
            margin-top: auto;
        }

        footer p {
            margin: 5px 0;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(100%); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-100%); }
            to { opacity: 1; transform: translateX(0); }
        }

        @keyframes slideInDown {
            from { opacity: 0; transform: translateY(-100px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes bounceIn {
            0% { transform: scale(0.8); opacity: 0; }
            60% { transform: scale(1.1); opacity: 1; }
            100% { transform: scale(1); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        /* Responsive Styles */
        @media only screen and (max-width: 768px) {
            h1 {
                font-size: 2.2rem;
            }

            h1 span.election_c {
                font-size: 1.2rem;
            }

            marquee {
                font-size: 1.5rem;
            }

            button {
                padding: 12px 30px;
                font-size: 1.2rem;
            }

            hr {
                width: 80%;
            }

            .nav nav ul {
                flex-direction: column;
                text-align: center;
            }

            .nav nav ul li {
                padding: 8px 0;
            }
        }

        @media only screen and (max-width: 480px) {
            h1 {
                font-size: 1.8rem;
            }

            h1 span.election_c {
                font-size: 1rem;
            }

            marquee {
                font-size: 1.2rem;
            }

            button {
                padding: 10px 20px;
                font-size: 1rem;
            }

            .nav nav ul li a {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="nav">
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="about">About Us</a></li>
                <li><a href="privacy">Privacy Policy</a></li>
                <li><a href="#">Translate</a></li>
                <li><a href="#">Toll Free No: 180025623</a></li>
                <li><a href="login_type">Login</a></li>
            </ul>
        </nav>
    </div>

    <div class="home">
        <div class="overlay"></div>
        <div class="content">
            <h1><span class="election_c">Online Voting Portal</span></h1>
            <hr>

            <button type="button" id="election"><a href="elcome">Voting Portal</a></button>
            
        </div>
    </div>

    
    <footer> 
        <p>&copy; 2025 Voting Website. All rights reserved.</p>
        <p>ELECTION COMMISSION BY DYNAMITE</p>
    </footer>
</body>
</html>
