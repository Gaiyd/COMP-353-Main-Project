<?php
   function button19() {

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

$sql = "SELECT FAC.facility_name,FAC.facility_address, FAC.facility_city, TAM.team_name AS Team_Name, PRO.name AS Project_Name, PRO.start_date, PRO.end_date, COUNT(RSN.employee_id) AS Total_Researchers, SUM(RSN.hours_worked) AS Total_Hours
FROM facility FAC
INNER JOIN research RSR ON FAC.facility_id = RSR.facility_id
INNER JOIN team TAM ON  TAM.facility_id = RSR.facility_id
INNER JOIN researcher RSN ON RSN.team_id = TAM.team_id
INNER JOIN company COM ON COM.company_id = FAC.company_id
INNER JOIN project PRO ON PRO.project_id = TAM.project_id
WHERE COM.company_name = 'Pfizer';";

//work done by Nooraldin Abdelgaiyd 40102069


$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>". $row["facility_name"]. "</td> <td>". $row["facility_address"]. " </td> <td>". $row["facility_city"]." </td> <td>". $row["team_name"]." </td> <td>".$row["project_name"]." </td> <td>". $row["start_date"]."</td><td>". $row["end_date"]."</td> <td>". $row["number_of_researchers"]."</td> <td>". $row["total_hours_worked"]."</td> </tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
    
   }

   
                  
?>