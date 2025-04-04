<?php
/*
$con = mysqli_connect('localhost', 'root', '', 'project');

if ($con) {
    $q = "SELECT * FROM candidate_info";
    
    $res = mysqli_query($con, $q);
    
    if ($res) {
        if (mysqli_num_rows($res) > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>Candidate No</th>
                        <th>Candidate Name</th>
                        <th>Candidate Mobile No</th>
                        <th>Candidate Aadhar No</th>
                        <th>Candidate Sign</th>
                        <th>Candidate Email</th>
                    </tr>";
            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>
                        <td>{$row['candidate_no']}</td>
                        <td>{$row['candidate_name']}</td>
                        <td>{$row['mobile_no']}</td>
                        <td>{$row['aadhar_no']}</td>
                        <td>{$row['candidate_sign']}</td>
                        <td>{$row['candidate_email']}</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "No candidate records found.";
        }
    } else {
        echo "Query failed: ";
    }
} else {
    echo "Connection not successful: ";
}*/
?>