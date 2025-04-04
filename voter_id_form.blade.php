<?php /*
// Database connection
$con = mysqli_connect('localhost', 'root', '', 'project');
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Handle form submission
if (isset($_POST['register'])) {
    // Get voter details from the form
    $voter_id = $_POST['voterID'];
    $voter_aadhar = $_POST['aadharNo'];
    $voter_name = $_POST['fullName'];
    $address = $_POST['address'];
    $mobile_no = $_POST['mobile'];
    $dob = $_POST['dob'];
    $gender = $_POST['Gender'];
    $state = $_POST['state'];
    $candidate_no = $_POST['candidate']; // selected candidate number

    // Validate Voter ID (exactly 10 digits)
    if (strlen($voter_id) != 10 || !is_numeric($voter_id)) {
        echo "<script>alert('Error: Voter ID must be exactly 10 digits and numeric.');</script>";
        exit();
    }

    // Validate Aadhar number (exactly 12 digits)
    if (strlen($voter_aadhar) != 12 || !is_numeric($voter_aadhar)) {
        echo "<script>alert('Error: Aadhar number must be exactly 12 digits and numeric.');</script>";
        exit();
    }

    // Validate Mobile number (exactly 10 digits)
    if (strlen($mobile_no) != 10 || !is_numeric($mobile_no)) {
        echo "<script>alert('Error: Mobile number must be exactly 10 digits and numeric.');</script>";
        exit();
    }

    // Insert voter details into voting_done table
    $insert_query = "INSERT INTO voting_done (voter_id, voter_aadhar, voter_name, address, voter_mobile_no, DOB, gender, state, gave_vote_to) 
                     VALUES ('$voter_id', '$voter_aadhar', '$voter_name', '$address', '$mobile_no', '$dob', '$gender', '$state', '$candidate_no')";
    
    if (mysqli_query($con, $insert_query)) {
        echo "<script>alert('Registration successful!');</script>";
    } else {
        echo "<script>alert('Registration failed: " . mysqli_error($con) . "');</script>";
    }
}

// Fetch candidates from the database
$candidates = mysqli_query($con, "SELECT candidate_no, candidate_name, candidate_sign FROM candidate_info");
*/?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voter Registration</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="date"], select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="radio"] {
            margin-right: 5px;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Voter Registration Form</h2>
    <form action="" method="POST">
        <label for="voterID">Voter ID No.</label>
        <input type="text" id="voterID" name="voterID" required>

        <label for="aadharNo">Aadhar Card No.</label>
        <input type="text" id="aadharNo" name="aadharNo" required>

        <label for="fullName">Full Name</label>
        <input type="text" id="fullName" name="fullName" required>

        <label for="address">Address</label>
        <input type="text" id="address" name="address" required>

        <label for="mobile">Mobile Number</label>
        <input type="text" id="mobile" name="mobile" required>

        <label for="dob">Date of Birth</label>
        <input type="date" id="dob" name="dob" required>

        <label>Gender</label>
        <label><input type="radio" name="Gender" value="Male" required> Male</label>
        <label><input type="radio" name="Gender" value="Female" required> Female</label>
        <label><input type="radio" name="Gender" value="Other" required> Other</label>

        <label for="state">State</label>
        <select name="state" id="state" required>
            <option value="Gujarat">Gujarat</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="Rajasthan">Rajasthan</option>
        </select>

        <h3>Select a Candidate</h3>
        <table>
            <tr>
                <th>Select</th>
                <th>Candidate No</th>
                <th>Name</th>
                <th>Sign</th>
            </tr>
            <?php /*while ($candidate = mysqli_fetch_assoc($candidates)) { ?>
                <tr>
                    <td><input type="radio" name="candidate" value="<?php echo $candidate['candidate_no']; ?>" required></td>
                    <td><?php echo $candidate['candidate_no']; ?></td>
                    <td><?php echo $candidate['candidate_name']; ?></td>
                    <td><?php echo $candidate['candidate_sign']; ?></td>
                </tr>
            <?php }*/ ?>
        </table>

        <button type="submit" name="register">REGISTER</button>
    </form>
</div>

</body>
</html>


