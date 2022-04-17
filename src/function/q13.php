
   
   
   
<?php
   function button13() {

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

$sql = "SELECT DISTINCT F.company_id, C.company_name, F.facility_city, F.facility_country, CL.client_country FROM facility F
INNER JOIN contract CO ON CO.company_id=F.company_id
INNER JOIN client CL ON CO.client_id=CL.client_id
INNER JOIN company C ON C.company_id=F.company_id
WHERE facility_type='Head Office' AND F.facility_country!=CL.client_country;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>". $row["company_id"]. "</td> <td>". $row["company_name"]. " </td> <td>". $row["facility_city"]." </td> <td>". $row["facility_country"]." </td> <td>". $row["client_country"]."</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
    
   }

   
                  
?>