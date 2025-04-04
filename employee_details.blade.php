<?php /*
$con = mysqli_connect('localhost', 'root', '', 'project'); 

if ($con) {
    
    $q = "SELECT * FROM emp_info"; 
    
    $res = mysqli_query($con, $q);
    
    if ($res) {
        
        if (mysqli_num_rows($res) > 0) {
            echo "<table border='1'>
                    <tr>
                        <th>Employee ID</th>
                        <th>Employee No</th>
                        <th>Employee Name</th>
                    </tr>";

            while ($row = mysqli_fetch_assoc($res)) {
                echo "<tr>
                        <td>{$row['ID']}</td>
                        <td>{$row['emp_no']}</td>
                        <td>{$row['emp_name']}</td>
                    </tr>";
            }
            echo "</table>";
        } else {
            echo "No employee records found.";
        }
    } else {
        echo "Query failed: ";
    }
} else {
    echo "Connection not successful: " ;
}
    */
?>
