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

$sql = "INSERT INTO product(product_id, company_id, product_name, product_volume, product_weight, product_price, product_status, product_description)
VALUES ('".$_POST["prod_id"]."','".$_POST["prod_comp_id"]."','".$_POST["prod_name"]."','".$_POST["prod_volume"]."','".$_POST["prod_weight"]."','".$_POST["prod_price"]."','".$_POST["prod_status"]."','".$_POST["prod_desc"]."');
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