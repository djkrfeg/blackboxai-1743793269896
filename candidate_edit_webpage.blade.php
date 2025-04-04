<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Candidate Details</title>
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
            border: 1px solid #ccc; /* Added border for the container */
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
    <h1>Edit Candidate Details</h1>
    <?php
    $con = mysqli_connect('localhost', 'root', '', 'project');

    if ($con) {
        if (isset($_GET['id'])) {
            $candidate_no = $_GET['id'];

            $query = "SELECT candidate_no, candidate_name, mobile_no, aadhar_no, candidate_email FROM candidate_info WHERE candidate_no = '$candidate_no'";
            $result = mysqli_query($con, $query);

            if (mysqli_num_rows($result) > 0) {
                $candidate = mysqli_fetch_assoc($result);
            } else {
                echo "<script>alert('Candidate not found.');</script>";
            }
        } else {
            echo "<script>alert('Invalid request.');</script>";
        }
    } else {
        echo "<script>alert('Database connection failed');</script>";
    }
    ?>

    <form action="" method="POST">
        <label for="candidate_no">Candidate Number:</label>
        <input type="text" name="candidate_no" value="<?php echo isset($candidate) ? $candidate['candidate_no'] : ''; ?>" readonly>

        <label for="candidate_name">Candidate Name:</label>
        <input type="text" name="candidate_name" value="<?php echo isset($candidate) ? $candidate['candidate_name'] : ''; ?>" required>

        <label for="mobile_no">Candidate Mobile No.:</label>
        <input type="text" name="mobile_no" value="<?php echo isset($candidate) ? $candidate['mobile_no'] : ''; ?>" required>

        <label for="aadhar_no">Candidate Aadhar Number:</label>
        <input type="text" name="aadhar_no" value="<?php echo isset($candidate) ? $candidate['aadhar_no'] : ''; ?>" required>

        <label for="candidate_email">Candidate Email:</label>
        <input type="text" name="candidate_email" value="<?php echo isset($candidate) ? $candidate['candidate_email'] : ''; ?>" required>

        <input type="submit" value="Update Candidate" name="submit">
    </form>
</div>
</body>
</html>

<?php/*
if (isset($_POST['submit'])) {
    $candidate_no = $_POST['candidate_no'];
    $candidate_name = $_POST['candidate_name'];
    $mobile_no = $_POST['mobile_no'];
    $aadhar_no = $_POST['aadhar_no'];
    $candidate_email = $_POST['candidate_email'];

    $update_query = "UPDATE candidate_info SET candidate_name='$candidate_name', mobile_no='$mobile_no', aadhar_no='$aadhar_no', candidate_email='$candidate_email' WHERE candidate_no='$candidate_no'";

    if (mysqli_query($con, $update_query)) {
        echo "<script>alert('Data updated successfully');</script>";
    } else {
        if (mysqli_errno($con) == 1062) {
            echo "<script>alert('Duplicate entry.');</script>";
        } else {
            echo "<script>alert('Data not updated: " . mysqli_error($con) . "');</script>";
        }
    }
}

mysqli_close($con);
*/
?>

