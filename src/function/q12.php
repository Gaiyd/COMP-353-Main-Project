
   
   
   
<?php
   function button12() {

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

$sql = "SELECT DISTINCT C.company_name,
    WF.facility_country,
    SUM(WS.total_storage)
FROM company C
INNER JOIN (SELECT C.company_id, F.facility_id, F.facility_country
FROM facility F, company C
WHERE F.facility_type='Warehouse' AND F.company_id=C.company_id) WF ON WF.company_id=C.company_id
INNER JOIN (SELECT CL.client_id, CL.client_country, CO.contract_id, CO.company_id
FROM client CL, contract CO
WHERE CO.client_id=CL.client_id) CC ON CC.company_id=C.company_id
INNER JOIN (SELECT W.facility_id, SUM(W.storage_capacity) as total_storage
FROM warehouse W, facility F
WHERE W.facility_id=F.facility_id
GROUP BY W.facility_id) WS ON WS.facility_id=WF.facility_id
WHERE WF.facility_country=CC.client_country
GROUP BY C.company_name, facility_country;;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>". $row["company_name"]. "</td> <td>". $row["facility_country"]. " </td> <td>". $row["SUM(WS.total_storage)"]."</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
    
   }

   
                  
?>