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
    SET employee_task = 'CEO'
    WHERE employee_id = '40'";


$result = $conn->query($sql);

$secondSql ="
UPDATE head_office
SET ceo_name = (SELECT CONCAT((SELECT employee_first FROM employee WHERE employee_task ='CEO' AND facility_id = '37'), ' ', (SELECT employee_first FROM employee WHERE employee_task ='CEO' AND facility_id = '37')) AS ConcatenatedString)
WHERE facility_id = '37';
";  

$secondResult = $conn->query($secondSql);
echo $_POST["Selec_project"];
if(gettype($result)=='boolean' && gettype($secondResult)=='boolean'){ // test for boolean
    if($result){  // returned TRUE, e.g. in case of a DELETE sql  
        echo "SQL succeeded"; 
    } else { // returned FALSE
        echo "Error happend" ;
    } ;
} 


$conn->close();


   
                  
?>