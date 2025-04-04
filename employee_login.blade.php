<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Login</title>
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
            text-align: center;
            padding-top: 100px;
        }

        table {
            margin: 0 auto;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        td {
            padding: 10px;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <form action="" method="POST">
        <table>
            <tr>
                <td colspan="2">
                    <h2>Employee Login</h2>
                </td>
            </tr>
            <tr>
                <td>Employee_id:</td>
                <td><input type="text" placeholder="Employee_Id" name="empid" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" placeholder="Password" name="password" required></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="submit" name="submit">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>

<?php /*

$con = mysqli_connect('localhost', 'root', '', 'project'); 
if ($con) {
    if (isset($_POST['submit'])) {
        $emp_id = $_POST['empid'];
        $pass = $_POST['password'];
        $q = "SELECT * FROM emp_info WHERE emp_id='$emp_id' && password='$pass'"; 

        $res = mysqli_query($con, $q);
        $record = mysqli_num_rows($res);

        if ($record == 1) {
            header("location:employee_dashboard.php"); 
        } else {
            echo "Invalid Employee name or Password";
        }
    }
} else {
    echo "Connection not successful";
}*/

?>
