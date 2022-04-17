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
UPDATE employee
SET employee_task='".$_POST["emp_task"]."',facility_id='".$_POST["emp_fac"]."'
WHERE employee_id = '".$_POST["sel_emp"]."'";
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