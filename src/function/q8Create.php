<?php
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

$sql = "INSERT INTO contract(total_amount, client_id, company_id, contract_company_sign, contract_client_sign, contract_signed_on, expected_delivery)
  VALUES ('".$_POST["cont_amount"]."', '".$_POST["cont_cli_id"]."','".$_POST["cont_comp_id"]."','".$_POST["cont_comp_sign"]."','".$_POST["cont_cli_sig"]."','".$_POST["cont_sign_on"]."','".$_POST["cont_del"]."');
  ";
$result = $conn->query($sql);


if(gettype($result)=='boolean'){ // test for boolean
    if($result){  // returned TRUE, e.g. in case of a DELETE sql  
        echo "SQL succeeded"; 
    } else { // returned FALSE
        echo "Error happend" ;
    } ;
} 


$conn->close();


                  
?>