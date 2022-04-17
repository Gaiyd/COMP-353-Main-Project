<?php
  function facDisplay() {
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
      FROM facility
      WHERE facility_id = '".$_POST["Sel_facility"]."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr> <td>". $row["facility_id"]. "</td> <td>". $row["company_id"]."</td> <td>". $row["facility_type"]."</td> <td>". $row["facility_name"]."</td> <td>". $row["facility_phone"]."</td> <td>". $row["facility_address"]."</td> <td>". $row["facility_city"]. "</td> <td>".$row["facility_province"]."</td> <td>". $row["facility_country"]."</td> <td>". $row["facility_postal"]."</td></tr>";
        }
    } else {
        echo "0 results";
    }
    
    $conn->close();
    
   }
                  
?>