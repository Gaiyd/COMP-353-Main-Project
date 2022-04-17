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

$sql = "INSERT INTO client(client_name, client_email, client_phone, client_contact, client_address, client_city, client_province, client_country, client_postal)
VALUES ('".$_POST["cli_name"]."', '".$_POST["cli_email"]."', '".$_POST["cli_phone"]."', '".$_POST["cli_contract"]."','".$_POST["cli_address"]."','".$_POST["cli_city"]."','".$_POST["cli_prov"]."','".$_POST["cli_country"]."','".$_POST["cli_postal"]."');

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