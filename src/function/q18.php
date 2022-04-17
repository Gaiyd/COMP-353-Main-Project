<?php
   function button18() {

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

$sql = "SELECT distinct employee.employee_email as EmployeeMail, employee.employee_first as FirstName, employee.employee_last as LastName, cn.company_name as CompanyName, rsr.leader_id as leader, SUM(rsr.hours_worked) as TotalHoursWorked from employee
INNER JOIN facility fc ON employee.facility_id=fc.facility_id
INNER JOIN company cn ON cn.company_id=fc.company_id
inner JOIN researcher rsr ON rsr.employee_id=employee.employee_id 
Group by employee.employee_email
order by rsr.hours_worked desc;;
;";

//SQL and PHP by Nooraldin Abdelgaiyd 40102069, only difference between this code and the other code is the removal of a SELECT leader_id, column, howver my contribution to this wasn't recognized The original submission was last night and it was removed again
//the entire code on this page is 100% my work
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>". $row["employee_email"]. "</td> <td>". $row["employee_first"]. " </td> <td>". $row["employee_last"]." </td> <td>". $row["companyName"]."</td> <td>". $row["leaderID"]. " </td> <td>". $row["Total hours worked"]. " </td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
    
   }

   
                  
?>