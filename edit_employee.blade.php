<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
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
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <h1>Employee Management</h1>
    <div class="container">
        <form action="" method="POST">
            <table>
                <thead>
                    <tr>
                        <th>Employee Number</th>
                        <th>Employee Name</th>
                        <th>Employee Mobile No.</th>
                        <th>Employee Aadhar Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php /*
                    
                    $con = mysqli_connect('localhost', 'root', '', 'project');

                    
                    if ($con) {
                        
                        $result = mysqli_query($con, "SELECT emp_no, emp_name, mobile_no, aadhar_no FROM emp_info");

                        
                        if (mysqli_num_rows($result) > 0) {
                            
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['emp_no'] . "</td>";
                                echo "<td>" . $row['emp_name'] . "</td>";
                                echo "<td>" . $row['mobile_no'] . "</td>";
                                echo "<td>" . $row['aadhar_no'] . "</td>";
                                echo "<td>
                                        <a href='employee_edit_webpage.php?emp_no=" . $row['emp_no'] . "'>
                                            <button type='button'>Edit</button>
                                        </a>
                                      </td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>No employees found</td></tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>Error connecting to database</td></tr>";
                    }

                    
                    mysqli_close($con);
                    */                  
                    ?>
                </tbody>
            </table>
        </form>
    </div>

</body>
</html>