
   
   
   
<?php
   function button14() {

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

$sql = "
SELECT DISTINCT C.company_name, CL.client_name, contract.contract_signed_on as contract_date, PRO.product_name, QUA.Quantity, contract.total_amount FROM contract
INNER JOIN company C ON C.company_id=contract.company_id
INNER JOIN client CL ON contract.client_id=CL.client_id
LEFT JOIN (SELECT contract.contract_id, product.product_name
FROM contract, product, purchase
WHERE product.upc = purchase.upc AND purchase.contract_id=contract.contract_id
GROUP BY contract.contract_id) PRO ON PRO.contract_id=contract.contract_id
LEFT JOIN (SELECT contract.contract_id, purchase.quantity as Quantity
FROM contract, product, purchase
WHERE product.upc = purchase.upc AND purchase.contract_id=contract.contract_id
GROUP BY contract.contract_id) QUA ON QUA.contract_id=contract.contract_id
WHERE C.company_name='Pfizer';";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>". $row["company_name"]. " </td><td>". $row["client_name"]. " </td> <td>". $row["contract_date"]." </td> <td>". $row["product_name"]." </td> <td>". $row["Quantity"]." </td> <td>". $row["total_amount"]."</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
    
   }

   
                  
?>