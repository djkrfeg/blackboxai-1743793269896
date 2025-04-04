<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Candidate</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, #1e3c72, #2a5298);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            padding: 30px;
            width: 400px;
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin: 10px 0 5px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="number"],
        input[type="file"] {
            width: calc(100% - 24px); /* Adjusting width for padding */
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 10px;
            transition: border 0.3s, box-shadow 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="tel"]:focus,
        input[type="number"]:focus,
        input[type="file"]:focus {
            border: 1px solid #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 6px;
            cursor: pointer;
            width: 100%;
            transition: background 0.3s, transform 0.3s;
            font-weight: bold;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .message {
            text-align: center;
            margin-top: 10px;
            color: green;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Add Candidate</h2>
        <form method="POST" enctype="multipart/form-data">
            <label for="candidate_no">Candidate Number:</label>
            <input type="text" name="candidate_no" required>

            <label for="candidate_name">Candidate Name:</label>
            <input type="text" name="candidate_name" required>

            <label for="candidate_email">Candidate Email:</label>
            <input type="email" name="candidate_email" required>

            <label for="candidate_name">Candidate Sign:</label>
            <input type="text" name="candidate_sign" required>

            <label for="mobile_no">Mobile Number:</label>
            <input type="tel" name="mobile_no" required>

            <label for="aadhar_no">Aadhar Number:</label>
            <input type="number" name="aadhar_no" required>

            <input type="submit" value="Add Candidate" name="submit">
        </form>
    </div>
</body>
</html>
