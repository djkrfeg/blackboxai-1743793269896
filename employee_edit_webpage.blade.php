<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee Details</title>
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
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 10px;
        }
        input[type="text"], input[type="number"] {
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Edit Employee Details</h1>
        <?php /*
        
        $con = mysqli_connect('localhost', 'root', '', 'project');

        
        if ($con) {
            
            if (isset($_GET['emp_no'])) {
                $emp_no = $_GET['emp_no'];

                
                $query = "SELECT emp_no, emp_name, mobile_no, aadhar_no FROM emp_info WHERE emp_no = '$emp_no'";
                $result = mysqli_query($con, $query);

                
                if (mysqli_num_rows($result) > 0) {
                    $employee = mysqli_fetch_assoc($result);
                } else {
                    echo "<script>alert('Employee not found.');</script>";
                }
            } else {
                echo "<script>alert('Invalid request.');</script>";
            }
        } else {
            echo "<script>alert('Database connection failed');</script>";
        }
            */
        ?>

        <form action="" method="POST">
            <label for="employee_number">Employee Number:</label>
            <input type="text" name="employee_number" value="<?php /* echo $employee['emp_no']; */?>" readonly>

            <label for="employee_name">Employee Name:</label>
            <input type="text" name="employee_name" value="<?php /* echo $employee['emp_name']; */ ?>" required>

            <label for="mobile_number">Employee Mobile No.:</label>
            <input type="text" name="mobile_number" value="<?php /* echo $employee['mobile_no']; */ ?>" required>

            <label for="aadhar_number">Employee Aadhar Number:</label>
            <input type="text" name="aadhar_number" value="<?php /* echo $employee['aadhar_no']; */?>" required>

            <input type="submit" value="Update Employee" name="submit">
        </form>
    </div>

    <?php /*
    if (isset($_POST['submit'])) {
        
        $emp_number = $_POST['employee_number'];
        $emp_name = $_POST['employee_name'];
        $mobile_number = $_POST['mobile_number'];
        $aadhar_number = $_POST['aadhar_number'];

        
        $update_query = "UPDATE emp_info SET emp_name='$emp_name', mobile_no='$mobile_number', aadhar_no='$aadhar_number' WHERE emp_no='$emp_number'";

        
        if (mysqli_query($con, $update_query)) {
            echo "<script>alert('Data updated successfully');</script>";
        } else {
            echo "<script>alert('Data not updated.');</script>";
        }

        
        mysqli_close($con);
    }*/
    ?>

</body>
</html>
