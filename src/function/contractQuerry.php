
<?php
   function getContract() {

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
     SELECT contract_id FROM foc353_4.contract;
    ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<option value='".$row[contract_id]."'>".$row[contract_id]."</option>";
        }
    } else {
        echo "0 results";
    }
    
    $conn->close();
        
   }
                
?>