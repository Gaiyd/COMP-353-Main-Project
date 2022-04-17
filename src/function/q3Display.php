<?php
  function empDisplay() {
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
      SELECT *
      FROM employee
      WHERE employee_id = '".$_POST["sel_emp"]."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr> <td>". $row["employee_id"]. "</td> <td>". $row["employee_first"]."</td> <td>". $row["employee_last"]."</td> <td>". $row["employee_dob"]."</td> <td>". $row["employee_phone"]."</td> <td>". $row["employee_address"]."</td> <td>". $row["employee_city"]. "</td> <td>".$row["employee_province"]."</td> <td>". $row["employee_postal"]."</td> <td>". $row["employee_citizenship"]."</td> <td>". $row["employee_email"]."</td> <td>". $row["facility_id"]."</td> <td>". $row["employee_task"]."</td> <td>". $row["employee_salary"]."</td> <td>". $row["employee_start"]."</td> <td>". $row["employee_end"]."</td></tr>";
        }
    } else {
        echo "0 results";
    }
    
    $conn->close();
    
   }
                  
?>