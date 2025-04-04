<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Selection</title>
    <style>
        
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #74ebd5, #ACB6E5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        h2 {
            text-align: center;
            font-size: 24px;
            color: #333;
        }

        
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            animation: fadeIn 1s ease-in-out;
        }

        .form-container label {
            font-size: 18px;
            color: #555;
        }

        
        input[type="radio"] {
            margin-right: 10px;
        }

        
        input[type="submit"] {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 20px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #2980b9;
        }

        
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        
        label:hover {
            color: #2980b9;
            transition: color 0.3s ease;
        }

        
        @media (max-width: 600px) {
            .form-container {
                width: 90%;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Select Login Type</h2>

        <form method="POST" action="">
            <label for="admin">
                <input type="radio" id="admin" name="login_type" value="admin" required>
                Admin Login
            </label><br><br>

            <label for="employee">
                <input type="radio" id="employee" name="login_type" value="employee">
                Employee Login
            </label><br><br>

            <input type="submit" name="submit" value="Proceed">
        </form>
    </div>

    <?php /*
    
    if (isset($_POST['submit'])) {
        $login_type = $_POST['login_type'];

        if ($login_type == 'admin') {
            
            header("Location: adminlogin.php");
        } elseif ($login_type == 'employee') {
            
            header("Location: employee_login.php");
        }
        exit();
    }*/
    ?>

</body>
</html>
