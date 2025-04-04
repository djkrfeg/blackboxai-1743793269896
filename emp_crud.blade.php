<?php /*

$con = mysqli_connect('localhost', 'root', '', 'project');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['delete'])) {
    $emp_no = mysqli_real_escape_string($con, $_POST['emp_no']); // Sanitize input

    $delete_query = "DELETE FROM emp_info WHERE emp_no = '$emp_no'";
    if (mysqli_query($con, $delete_query)) {
        echo "<script>alert('Employee deleted successfully');</script>";
        echo "<script>window.location.href='employee_details.php';</script>"; // Redirect to refresh
    } else {
        echo "<script>alert('Failed to delete employee');</script>";
    }
}

$query = "SELECT * FROM emp_info";
$result = mysqli_query($con, $query);
*/?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Management</title>
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
            max-width: 1000px;
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
            display: inline-block;
            margin: 10px;
        }

        .btn:hover {
            background-color: #2a58d0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #4a73e8;
            color: white;
        }

        .btn-delete {
            padding: 7px 15px;
            background-color: #dc3545;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }

        .btn-edit {
            padding: 7px 15px;
            background-color: #28a745;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }

        .btn-edit:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Employee Management</h1>

        <div style="text-align: center; margin-top: 20px;">
            <a href="add_employee" class="btn">Add Employee</a>
            <a href="employee_details" class="btn">Fetch Employees</a>
        </div>

        <h2>Existing Employees</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>City</th>
                <th>Gender</th>
                <th>DOB</th>
                <th>Mobile No</th>
                <th>Aadhar No</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php /* while ($row = mysqli_fetch_assoc($result)) { */?>
                <tr>
                    <td><?php /* echo $row['emp_no']; */?></td>
                    <td><?php /* echo $row['emp_name'];*/ ?></td>
                    <td><?php /* echo $row['emp_city']; */ ?></td>
                    <td><?php /* echo $row['gender']; */?></td>
                    <td><?php /* echo $row['DOB']; */?></td>
                    <td><?php /* echo $row['mobile_no'];*/ ?></td>
                    <td><?php /* echo $row['aadhar_no']; */?></td>
                    <td>
                        <a href="employee_edit_webpage ?emp_no=<?php /* echo $row['emp_no'];*/ ?>" class="btn-edit">Edit</a>
                    </td>
                    <td>
                        <form method="post" style="display:inline;">
                            <input type="hidden" name="emp_no" value="<?php /*echo $row['emp_no'];*/ ?>">
                            <button type="submit" name="delete" class="btn-delete">Delete</button>
                        </form>
                    </td>
                </tr>
            
        </table>
    </div>
</body>
</html>

