<!DOCTYPE html>
<?php require('function/companyQuery.php'); ?>
<?php require('function/facilityQuerry.php'); ?>
<?php require('function/q2Display.php'); ?>
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
        <h1 class="introTxt">Facility</h1>
        <p>This page allow to manage facility. It represent the request #2</p>
        <p><a class="navLink" href="../index.html">click here to return to the home page</a></p>
    </div>
    <details>
        <summary>Create</summary>
        <form action="function/q2Creat.php" method="post">
            <label for="facCrEllementOne">company</label>
            
            <select id="facCrEllementOne" name="comp_id">
            <?php getCompany();?>
            </select>
            <label for="facCrEllementTwo">facility type</label>
            <select id="facCrEllementTwo" name="fac_type">
                <option value="Head Office">Head office</option>
                <option value="Research">Research center</option>
                <option value="Warehouse">Warehouse</option>
                <option value="Manufacture">Manifacturing</option>
            </select>
            <label for="facCrEllementTwo">facility name</label>
            <input type="text" name="fac_name" id="facCrEllementTwo">
            
            <label for="facCrEllementTree">facility phone</label>
            <input type="text" name="fac_phone" id="facCrEllementTree">
            
            <label for="facCrEllementFour">facility address</label>
            <input type="text" name="fac_add" id="facCrEllementFour">
            
            <label for="facCrEllementFive">facility city</label>
            <input type="text" name="fac_city" id="facCrEllementFive">
            
            <label for="facCrEllementSix">facility province</label>
            <input type="text" name="fac_pro" id="facCrEllementSix">
            
            <label for="facCrEllementSeven">facility_country</label>
            <input type="text" name="fac_coun" id="facCrEllementSeven">
            
            <label for="facCrEllementEight">facility postal</label>
            <input type="text" name="fac_pos" id="facCrEllementEight">
            
            <input type="submit" value="Submit">
        </form>

      
    </details>
    <details>
        <summary>Delete</summary>
        <form action="function/q2del.php" method="post">
            <label for="facDelSelect">Select a facility</label>
            <select id="facDelSelect" name="Sel_facility">
               <?php getFacility() ?>;
            </select>
            
            
            <input type="submit" value="Submit">   
        </form>
    </details>

    <details>
        <summary>Edit</summary>
        <form form action="function/q2Edit.php" method="post">
            <label for="facEditSelect">Select a facility :</label>
            <select id="facEditSelect" name="Sel_facility">
               <?php getFacility() ?>;
            </select>
            
            <label for="facEdiEllementTwo">facility type</label>
            <select id="facEdiEllementTwo" name="fac_type">
                <option value="Head Office">Head office</option>
                <option value="Research">Research center</option>
                <option value="Warehouse">Warehouse</option>
                <option value="Manufacture">Manifacturing</option>
            </select>
            <label for="facEdiEllementOne"> Name</label>
            <input type="text" name="new_name" id="facEdiEllementOne">
        
            <input type="submit" value="Submit">   
        </form>
        
         
    </details>

    <details>
        <summary>Display</summary>
        <form method="post">
            
            <label for="facDisSelect">Select a facility</label>
            <select id="facDisSelect" name="Sel_facility">
               <?php getFacility() ?>;
            </select>
            <input type="submit" value="Submit" name="display">   
        </form>

        <table class="displayTable">
            <tr>
                <th>Facility id</th>
                <th>Company id</th>
                <th>Facility type </th>
                <th>faciliy Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>City</th>
                <th>Province</th>
                <th>Country</th>
                <th>Postal code</th>
                
            </tr>
            <?php
                   if(array_key_exists('display', $_POST)) {
                      facDisplay();
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