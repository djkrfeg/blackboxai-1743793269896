<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Employee</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }
        h1 {
            text-align: center;
        }
        .container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Remove Employee</h1>
    <div class="container">
        <form action="" method="POST">
            <label for="emp_no">Employee Number:</label>
            <input type="text" name="emp_no" required>
            <input type="submit" value="Remove Employee" name="submit">
        </form>
    </div>

    
</body>
</html>


<?php /*
    if (isset($_POST['submit'])) {
    
        $emp_no = $_POST['emp_no'];

    
        $con = mysqli_connect('localhost', 'root', '', 'project');

    
        if ($con) {
    
            $delete = "DELETE FROM emp_info WHERE emp_no = '$emp_no'";

    
            if (mysqli_query($con, $delete)) {
    
                if (mysqli_affected_rows($con) > 0) {
                    echo "<script>alert('Employee removed successfully');</script>";
                } else {
                    echo "<script>alert('No employee found with this emp_no');</script>";
                }
            } else {
                echo "<script>alert('Error: " . mysqli_error($con) . "');</script>";
            }
        } else {
            echo "<script>alert('Connection failed');</script>";
        }

    
        mysqli_close($con);
    
    }
        */
?>


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
                                        <button type='submit' name='delete' value='" . $row['emp_no'] . "'>Delete</button>
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
                   */ ?> 
                </tbody>
            </table>
        </form>
    </div>

</body>
</html>


<?php/*
if (isset($_POST['delete'])) {
    
    $emp_no = $_POST['delete'];

    
    $con = mysqli_connect('localhost', 'root', '', 'project');

    
    if ($con) {
        
        $delete_query = "DELETE FROM emp_info WHERE emp_no = '$emp_no'";

        
        if (mysqli_query($con, $delete_query)) {
            echo "<script>alert('Employee removed successfully');</script>";
            
            echo "<meta http-equiv='refresh' content='0'>";
        } else {
            echo "<script>alert('Employee not removed successfully');</script>";
        }
    } else {
        echo "<script>alert('Database connection failed');</script>";
    }

    
    mysqli_close($con);
}*/
?>
