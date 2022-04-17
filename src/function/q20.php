
<?php
   function button20() {

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

$sql = "SELECT company.company_name,
	YEAR(TA.contract_signed_on) as year,
	SUM(TA.totalAmount) as totalAmounts
FROM company
INNER JOIN (SELECT company.company_id, contract.contract_signed_on, SUM(contract.total_amount) as totalAmount
FROM contract, company
WHERE contract.company_id=company.company_id
GROUP BY contract.contract_signed_on) TA ON TA.company_id=company.company_id
GROUP BY YEAR(TA.contract_signed_on), company.company_id
ORDER BY year DESC, totalAmounts DESC;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>". $row["company_name"]. "</td> <td>". $row["year"]. " </td> <td>". $row["totalAmounts"]."</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
    
   }

   
                  
?>