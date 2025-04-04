<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <style>
        body {
            background: linear-gradient(135deg, #e3f2fd, #bbdefb);
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            overflow: hidden;
        }

        .container {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.3);
            border-radius: 15px;
            padding: 50px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h2 {
            margin-bottom: 30px;
            color: #2c3e50;
        }

        .button {
            display: inline-block;
            padding: 15px 30px;
            margin: 10px;
            border: none;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
            font-size: 16px;
            text-decoration: none;
            transition: transform 0.3s, background-color 0.3s;
        }

        .button:hover {
            transform: translateY(-3px);
            background-color: #0056b3;
        }

        .button:active {
            transform: translateY(1px);
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Employee Dashboard</h2>
        <a class="button" href="register_voter">Register a Voter</a>
        <a class="button" href="fetch_results">Fetch Voting Results</a>
        <a class="button" href="fetch_complaints">Fetch Voter Complaints</a>
    </div>
</body>

</html>
