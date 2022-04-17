<!DOCTYPE html>
<?php require('function/facilityQuerry.php'); ?>
<?php require('function/companyQuery.php'); ?>
<?php require('function/productQuerry.php'); ?>
<?php require('function/q6Display.php'); ?>

<html lang = "EN" xml:lang = "EN" dir = "ltr">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
           C19DDS
        </title>
    
        <link rel="stylesheet" href="../style/style.css">
    
    </head>
<body>


<div class="wrapper">
    <div class="centerText">
       
        <h1 class="introTxt">Product</h1>
        <p>This page allow to manage product. It represent the request #6</p>       
        <p><a class="navLink" href="../index.html">click here to return to the home page</a></p>
    </div>
    <details>v
    
    
        <summary>Create</summary>
        <form action="function/q6Create.php" method="post">
           
             <label for="prodCrEllementOne">product </label> 
             <select id="prodCrEllementOne" name="prod_id">
                
                <?php getProduct() ?>;
                
            </select>
             
           
            <label for="prodCrEllementTwo">company_id</label>
            
            <select id="prodCrEllementTwo" name="prod_comp_id">
               <?php getCompany() ?>;
            </select>
            
            
            <label for="prodCrEllementTree">product_name</label>
            <input type="text" name="prod_name" id="prodCrEllementTree">
            
            <label for="prodCrEllementFour">product_volume</label>
            <input type="text" name="prod_volume" id="prodCrEllementFour">
            
            <label for="prodCrEllementFive">product_weight</label>
            <input type="text" name="prod_weight" id="prodCrEllementFive">
            
            
            <label for="prodCrEllementSix">product_price</label>
            <input type="text" name="prod_price" id="prodCrEllementSix">
            
            
            <label for="prodCrEllementSeven">product_status</label>
            <select id="prodCrEllementSeven" name="prod_status">
              <option value="A">Available</option>
              <option value="NA">Not-available</option>
            </select>
            
            
            
            
            <label for="prodCrEllementEight">product_description</label>
            <input type="text" name="prod_desc" id="prodCrEllementEight">
            
            
            <input type="submit" value="Submit">
        </form>

      
    </details>
    <details>
        <summary>Delete</summary>
        <form action="function/q6Del.php" method="post">
            <label for="prodDelSelect">Select a product</label>
            <select id="prodDelSelect" name="sel_prod">
                
                <?php getProduct() ?>;
                
            </select>
            <input type="submit" value="Submit">   
        </form>
    </details>

    <details>
        <summary>Edit</summary>
        <form action="function/q6Edit.php" method="post">
        
            <label for="prodEditSelect">Select a product :</label>
            <select id="prodEditSelect" name="sel_prod">
                <?php getProduct() ?>;
            </select>
               
            <label for="prodEdiEllementOne">New product name</label>
            <input type="text" name="prod_name" id="prodEdiEllementOne">
            <input type="submit" value="Submit">   
        </form>
    </details>

    <details>
        <summary>Display</summary>
        <form method="post">
            <label for="prodDispSelect">Select a product</label>
            <select id="prodDispSelect" name="sel_prod">
              <?php getProduct() ?>;
            </select>
            <input type="submit" value="Submit" name="display">   
        </form>

        <table class="displayTable">
            <tr>
                <th>ID</th>
                <th>UPC</th>
                <th>Company ID</th>
                <th>Product name</th>
                <th>Product volume</th>
                <th>Product weight</th>
                <th>Price</th>
                <th>Status</th>
                <th>Description</th>
                
            </tr>
            <?php
                   if(array_key_exists('display', $_POST)) {
                      productDisplay();
                    }   
            ?>
        </table>
    </details>
    
    
        <footer>
        <ul>
            <div>Page List</div>
            <li>page 1 </li>
            <li>page 1 </li>
            <li>page 1 </li>
            <li>page 1 </li>
        </ul>
        <ul>
            <div>Page List</div>
            <li>page 1 </li>
            <li>page 1 </li>
            <li>page 1 </li>
            <li>page 1 </li>
        </ul>
        <ul>
            <div>Page List</div>
            <li>page 1 </li>
            <li>page 1 </li>
            <li>page 1 </li>
            <li>page 1 </li>
        </ul>
        <ul>
            <div>Page List</div>
            <li>page 1 </li>
            <li>page 1 </li>
            <li>page 1 </li>
            <li>page 1 </li>
        </ul>
    </footer>
</div>

    


</body>
</html>