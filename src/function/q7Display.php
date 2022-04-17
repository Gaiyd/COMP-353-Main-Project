<?php
  function clientDisplay() {
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
    FROM client
    WHERE client_id = '".$_POST["sel_cli"]."';";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {      
             echo "<tr> <td>". $row["client_id"]. "</td> <td>". $row["client_name"]."</td> <td>". $row["client_email"]."</td> <td>". $row["client_phone"]."</td> <td>". $row["client_contact"]."</td> <td>". $row["client_address"]."</td> <td>". $row["client_city"]."</td> <td>". $row["client_province"]."</td> <td>". $row["client_country"]."</td> <td>". $row["client_postal"]."</td></tr>";
        }
    } else {
        echo "0 results";
    }
    
    $conn->close();
    
   }
                  
?>