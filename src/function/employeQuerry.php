
<?php
   function getEmp() {

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
     SELECT employee_id,  employee_first, employee_last FROM foc353_4.employee;
    ";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<option value='".$row[employee_id]."'>".$row[employee_first]." ".$row[employee_last]."</option>";
        }
    } else {
        echo "0 results"; 
    }
    
    $conn->close();
        
   }
                
?> 