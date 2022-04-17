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

$sql = "INSERT INTO employee(employee_first, employee_last, employee_dob, employee_ssn, employee_phone, employee_address, employee_city, employee_province, employee_country, employee_postal, employee_citizenship, employee_email, facility_id, employee_task, employee_salary, employee_start, employee_end)
VALUES ('".$_POST["emp_fname"]."', '".$_POST["emp_lname"]."','".$_POST["emp_dob"]."','".$_POST["emp_ssn"]."','".$_POST["emp_phone"]."','".$_POST["emp_address"]."','".$_POST["emp_city"]."','".$_POST["emp_province"]."','".$_POST["emp_country"]."','".$_POST["emp_postal"]."','".$_POST["emp_citizenship"]."','".$_POST["emp_email"]."','".$_POST["emp_fac_id"]."','".$_POST["emp_task"]."','".$_POST["emp_salary"]."','".$_POST["emp_start"]."','".$_POST["emp_end"]."');
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