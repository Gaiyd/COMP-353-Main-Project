  <?php
   function button15() {

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

$sql =" SELECT distinct CL.client_name, C.company_name, contract.contract_signed_on, pro.product_name, pr.quantity, contract.total_amount FROM contract
INNER JOIN company C ON C.company_id=contract.company_id
INNER JOIN client CL ON contract.client_id=CL.client_id
INNER JOIN product pro ON pro.company_id=C.company_id
INNER JOIN purchase pr ON contract.contract_id=pr.contract_id
ORDER BY contract.total_amount DESC;
";
// SQL and PHP by Nooraldin Abdelgaiyd 40102069, code wasn't even implemented in the original submission. The original submission was last night and it was removed again

//the entire code on this page is 100% my work

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>". $row["client_name"]. "</td> <td>". $row["company_name"]. " </td> <td>". $row["contract_signed_on"]." </td> <td>". $row["product_name"]." </td> <td>".$row["quantity"]." </td> <td>". $row["total_amount"]."</td></tr>";
    }
} else {
    echo "0 results";
}


$conn->close();
    
   }

   
                  
?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           