<?php
  function contractDisplay() {
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
    FROM contract
    WHERE contract_id = ".$_POST["sel_cont"].";";

    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {      
             echo "<tr> <td>". $row["contract_id"]. "</td> <td>". $row["total_amount"]."</td> <td>". $row["client_id"]."</td> <td>". $row["company_id"]."</td> <td>". $row["contract_company_sign"]."</td> <td>". $row["contract_client_sign"]."</td> <td>". $row["contract_signed_on"]."</td> <td>". $row["expected_delivery"]."</td></tr>";
        }
    } else {
        echo "0 results";
    }
    
    
    $conn->close();
    
   }
                  
?>