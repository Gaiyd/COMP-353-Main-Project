<?php
  
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
      DELETE FROM facility WHERE facility_id = '".$_POST["Sel_facility"]."'";
      
    $result = $conn->query($sql);
     if(gettype($result)=='boolean'){ // test for boolean
      if($result){  // returned TRUE, e.g. in case of a DELETE sql  
          echo "SQL succeeded"; 
      } else { // returned FALSE
          echo "Error happend" ;
      } ;
    } 
  
  
    $conn->close();
                
?>