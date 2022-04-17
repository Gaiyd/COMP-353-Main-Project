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

$sql = "
UPDATE company
SET company_name='".$_POST["new_name"]."'
WHERE company_id = '".$_POST["select_comp"]."'";
$result = $conn->query($sql);

echo $_POST["Selec_project"];
if(gettype($result)=='boolean'){ // test for boolean
    if($result){  // returned TRUE, e.g. in case of a DELETE sql  
        echo "SQL succeeded"; 
    } else { // returned FALSE
        echo "Error happend" ;
    } ;
} 


$conn->close();


   
                  
?>