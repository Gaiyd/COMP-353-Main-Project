<?php
  function proDisplay() {
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
      FROM project
      WHERE project_id = '".$_POST["Sel_proj"]."';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<tr> <td>". $row["project_id"]. "</td> <td>". $row["facility_id"]."</td> <td>". $row["name"]."</td> <td>". $row["start_date"]."</td> <td>". $row["end_date"]."</td></tr>";
        }
    } else {
        echo "0 results";
    }
    
    $conn->close();
    
   }
                  
?>