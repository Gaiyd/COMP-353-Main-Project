
<?php
   function button17() {

$servername = "foc353.encs.concordia.ca";
$username = "foc353_4";
$password = "Kyfcbuec";
$dbname = "foc353_4";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT DISTINCT E.employee_first, E.employee_last, E.employee_email, SUM(R.hours_worked) AS total_hours FROM researcher R
INNER JOIN employee E ON E.employee_id = R.employee_id
INNER JOIN (SELECT facility_id FROM facility F WHERE F.company_id = '1' AND F.facility_type = 'Research') FI ON FI.facility_id = E.facility_id
GROUP BY R.employee_id
ORDER BY total_hours DESC;;;

";
//SQL and PHP by Nooraldin Abdelgaiyd 40102069 The original submission was last night and it was removed again

//the entire code on this page is 100% my work

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>". $row["employee_first"]. "</td> <td>". $row["employee_last"]. " </td> <td>". $row["employee_email"]." </td> <td>". $row["total_hours"]."</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
    
   }

   
                  
?>