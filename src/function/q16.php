<?php
   function button16() {

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

$sql = "SELECT DISTINCT EMP.employee_ssn, EMP.employee_citizenship, RSN.researcher_name, COM.company_name FROM employee EMP

inner join researcher RSN on RSN.employee_id = EMP.employee_id
inner join project PRO on PRO.project_id=RSN.project_id
inner JOIN facility FAC ON FAC.facility_id = PRO.facility_id
inner join company COM on COM.company_id = FAC.company_id

inner JOIN (SELECT RSN1.employee_id FROM researcher RSN1 GROUP BY RSN1.employee_id HAVING COUNT(distinct RSN1.project_id) >= 3 ) RSN1 ON RSN1.employee_id=RSN.employee_id  

ORDER BY EMP.employee_ssn DESC;";
//first line: Set the headers
//the block Link the tables
//2nd line, remove all researchers who worked at less than 3 different laps
//3rd line descending order of SNN


// my code was changed without my knowledge again this morning, at 6 am, I wasn't even notified in the group chat that they changed it  The original submission was last night and it was removed again

//the entire code on this page is 100% my work

//done and implemented by Nooraldin Abdelgaiyd
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>". $row["EmployeeSSN"]. "</td> <td>". $row["ResearcherName"]. " </td> <td>". $row["EmployeeCitizenship"]." </td> <td>". $row["CompanyName"]."</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
    
   }

   
                  
?>