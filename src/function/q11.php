
   
   
   
<?php
   function button1() {

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

$sql = "SELECT DISTINCT C.company_name, 
	F.facility_city as head_office_location, 
	CONCAT(E.employee_first, ' ', E.employee_last) as CEO_name, 
    ES.employeesum, 
    RF.researchcenters, 
    RS.researchers, 
    MF.manufactures, 
    PC.productioncapacity, 
    WF.warehouses,
    SC.storagecapacity
    FROM company C
INNER JOIN facility F ON C.company_id=F.company_id
INNER JOIN employee E ON F.facility_id=E.facility_id
INNER JOIN (SELECT company.company_name, SUM(employee_id) as employeesum
FROM employee, facility, company
WHERE employee.facility_id=facility.facility_id AND facility.company_id=company.company_id
GROUP BY company.company_name) ES ON ES.company_name=C.company_name
LEFT JOIN (SELECT company.company_name, COUNT(facility_id) as researchcenters
FROM facility, company
WHERE facility_type='Research' AND facility.company_id=company.company_id
GROUP BY company.company_name) RF ON RF.company_name=C.company_name
LEFT JOIN (SELECT company.company_name, COUNT(employee_id) as researchers
FROM company, facility, project, researcher
WHERE facility.company_id=company.company_id AND project.facility_id=facility.facility_id AND researcher.project_id=project.project_id
GROUP BY company.company_name) RS ON RS.company_name=C.company_name
LEFT JOIN (SELECT company.company_name, COUNT(facility_id) as manufactures
FROM facility, company
WHERE facility_type='Manufacture' AND facility.company_id=company.company_id
GROUP BY company.company_name) MF ON MF.company_name=C.company_name
LEFT JOIN (SELECT company.company_name, SUM(production_capacity) as productioncapacity
FROM manufacture, facility, company
WHERE facility_type='Manufacture' AND facility.company_id=company.company_id AND manufacture.facility_id=facility.facility_id
GROUP BY company.company_name) PC ON PC.company_name=C.company_name
LEFT JOIN (SELECT company.company_name, COUNT(facility_id) as warehouses
FROM facility, company
WHERE facility_type='Warehouse' AND facility.company_id=company.company_id
GROUP BY company.company_name) WF ON WF.company_name=C.company_name
LEFT JOIN (SELECT company.company_name, SUM(storage_capacity) as storagecapacity
FROM warehouse, facility, company
WHERE facility_type='Warehouse' AND facility.company_id=company.company_id AND warehouse.facility_id=facility.facility_id
GROUP BY company.company_name) SC ON SC.company_name=C.company_name
WHERE F.facility_type='Head Office' AND E.employee_task='CEO'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr> <td>". $row["company_name"]. "</td> <td>". $row["head_office_location"]. " </td> <td>". $row["CEO_name"]." </td> <td>". $row["employeesum"]." </td> <td>". $row["researchcenters"]." </td> <td>". $row["researchers"] ." </td> <td>". $row["manufactures"]." </td> <td>". $row["productioncapacity"]." </td> <td>". $row["warehouses"] ." </td> <td>". $row["storagecapacity"]. "</td></tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
    
   }

   
                  
?>