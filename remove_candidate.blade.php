


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidate Management</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f4f4f4;
        }
        button {
            padding: 5px 10px;
            background-color: #ff6666;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #ff3333;
        }
    </style>
</head>
<body>

    <h1>Candidate Management</h1>
    <div class="container">
        <form action="" method="POST">
            <table>
                <thead>
                    <tr>
                        <th>Candidate No</th>
                        <th>Candidate Name</th>
                        <th>Candidate Mobile No.</th>
                        <th>Candidate Aadhar Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php /*
                    
                    $con = mysqli_connect('localhost', 'root', '', 'project');

                    
                    if ($con) {
                        
                        $result = mysqli_query($con, "SELECT candidate_no, candidate_name, mobile_no, aadhar_no FROM candidate_info");

                        
                        if (mysqli_num_rows($result) > 0) {
                            
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['candidate_no'] . "</td>";
                                echo "<td>" . $row['candidate_name'] . "</td>";
                                echo "<td>" . $row['mobile_no'] . "</td>";
                                echo "<td>" . $row['aadhar_no'] . "</td>";
                                echo "<td>
                                        <button type='submit' name='delete' value='" . $row['candidate_no'] . "'>Delete</button>
                                      </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No candidates found</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>Error connecting to database</td></tr>";
                    }

                    
                    mysqli_close($con);*/
                    ?>
                </tbody>
            </table>
        </form>
    </div>

</body>
</html>


<?php/*
if (isset($_POST['delete'])) {
    
    $candidate_no = $_POST['delete'];

    
    $con = mysqli_connect('localhost', 'root', '', 'project');

    
    if ($con) {
        
        $delete_query = "DELETE FROM candidate_info WHERE candidate_no = '$candidate_no'";

        
        if (mysqli_query($con, $delete_query)) {
            echo "<script>alert('candidate removed successfully');</script>";
            
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            "<script>alert('candidate not removed successfully');</script>";
        }
    } else {
        echo "<script>alert('Database connection failed');</script>";
    }

    
    mysqli_close($con);
}*/
?>
