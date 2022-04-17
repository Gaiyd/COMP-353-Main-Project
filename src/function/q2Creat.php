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

$sql = "INSERT INTO facility (company_id, facility_type, facility_name, facility_phone, facility_address, facility_city, facility_province, facility_country, facility_postal)
VALUES ('".$_POST["comp_id"]."','".$_POST["fac_type"]."','".$_POST["fac_name"]."', '".$_POST["fac_phone"]."', '".$_POST["fac_add"]."', '".$_POST["fac_city"]."', '".$_POST["fac_pro"]."','".$_POST["fac_coun"]."','".$_POST["fac_pos"]."');
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