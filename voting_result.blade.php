<?php /*
// Database connection
$con = mysqli_connect('localhost', 'root', '', 'project');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query to get the vote counts for each candidate
$query = "
    SELECT c.candidate_name, COUNT(v.gave_vote_to) AS vote_count
    FROM candidate_info c
    LEFT JOIN voting_done v ON c.candidate_no = v.gave_vote_to
    GROUP BY c.candidate_no, c.candidate_name
    ORDER BY vote_count DESC
";

// Execute the query
$result = mysqli_query($con, $query);

// Check if the query executed successfully
if (!$result) {
    die("Query failed: " . mysqli_error($con));
}*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Vote Counts</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #f2f2f2;
            font-family: 'Arial', sans-serif;
        }

        .container {
            width: 600px; /* Set a suitable width for the container */
            margin: 50px auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ccc;
            padding: 12px; /* Increased padding for table cells */
            text-align: left;
        }

        th {
            background-color: #007bff;
            color: white;
        }

        td {
            background-color: #f9f9f9;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Vote Counts by Candidate</h2>
        <table>
            <tr>
                <th>Candidate Name</th>
                <th>Vote Count</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['candidate_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['vote_count']); ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>

</body>
</html>

