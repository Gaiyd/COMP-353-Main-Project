<?php
  function teamDisplay() {
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
    FROM team
    WHERE team_id = ".$_POST["sel_team"].";";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {      
             echo "<tr> <td>". $row["team_id"]. "</td> <td>". $row["project_id"]."</td> <td>". $row["facility_id"]."</td> <td>". $row["team_name"]."</td> <td>". $row["leader_id"]."</td> <td>"."</td></tr>";
        }
    } else {
        echo "0 results";
    }
    
    
    $conn->close();
    
   }
                  
?>