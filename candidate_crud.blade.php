

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Candidate Management</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #f0f4f8;
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow: hidden;
        }

        .container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 1000px; /* Increased width */
            width: 100%;
            animation: fadeIn 1s ease-in;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        h2 {
            text-align: center;
            color: #444;
            margin: 20px 0;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: #4a73e8;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s;
            text-decoration: none;
            display: inline-block; /* Makes it look like a button */
            margin: 10px; /* Margin to separate buttons */
        }

        .btn:hover {
            background-color: #2a58d0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 2px solid #ddd; /* Table border */
        }

        th, td {
            padding: 15px; /* Increased padding */
            text-align: left;
            border: 1px solid #ddd; /* Added borders to cells */
        }

        th {
            background-color: #4a73e8;
            color: white;
        }

        .btn-delete {
            padding: 7px 15px;
            background-color: #dc3545; /* Red color */
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-delete:hover {
            background-color: #c82333; /* Darker red on hover */
        }

        .btn-edit {
            padding: 7px 15px;
            background-color: #28a745; /* Green color */
            color: white;
            border-radius: 5px;
            text-decoration: none;
            margin-left: 10px; /* Spacing between buttons */
        }

        .btn-edit:hover {
            background-color: #218838; /* Darker green on hover */
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Candidate Management</h1>

        <div style="text-align: center; margin-top: 20px;">
            <a href="add_candidate" class="btn">Add Candidate</a>
            <a href="candidate_details" class="btn">Fetch Candidates</a>
        </div>

        <h2>Existing Candidates</h2>
        <table>
            <tr>
                <th>Candidate No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile No</th>
                <th>Aadhar No</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            
            
            
        </table>
    </div>
</body>
</html>
