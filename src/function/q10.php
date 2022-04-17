
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
INSERT INTO researcher (team_id, project_id, employee_id, start_date, hours_worked, leader_id, researcher_name)
SELECT '".$_POST["Selec_project"]."' as team_id, '".$_POST["Selec_project"]."' as project_id,'".$_POST["Select_researcher"]."' as employee_id,'2017-03-22' as start_date, '120' as hours_worked,'9' as leader_id, CONCAT((SELECT employee.employee_first FROM employee WHERE employee.employee_id = '".$_POST["Select_researcher"]."'),' ',(SELECT employee.employee_last FROM employee WHERE employee.employee_id = '".$_POST["Select_researcher"]."')) as researcher_name;";
$result = $conn->query($sql);

echo $_POST["Selec_project"];
if(gettype($result)=='boolean'){ // test for boolean
    if($result){  // returned TRUE, e.g. in case of a DELETE sql  
        echo "SQL succeeded"; 
    } else { // returned FALSE
        echo "Error: " ;
    } ;
} 


$conn->close();


   
                  
?>