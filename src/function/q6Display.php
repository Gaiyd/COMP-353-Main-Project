<?php
  function productDisplay() {
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
     FROM product
     WHERE upc = '".$_POST["sel_prod"]."';";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
                 echo "<tr> <td>". $row["product_id"]. "</td> <td>". $row["upc"]."</td> <td>". $row["company_id"]."</td> <td>". $row["product_name"]."</td> <td>". $row["product_volume"]."</td> <td>". $row["product_weight"]."</td> <td>". $row["product_price"]."</td> <td>". $row["product_status"]."</td> <td>". $row["product_description"]."</td></tr>";
        }
    } else {
        echo "0 results";
    }
    
    $conn->close();
    
   }
   
  
                  
?>