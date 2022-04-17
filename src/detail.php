<!DOCTYPE html>
 <?php 
   require('function/q11.php');
   require('function/q12.php');
   require('function/q13.php');
   require('function/q14.php');
   require('function/q15.php');
   require('function/q16.php');
   require('function/q17.php');
   require('function/q18.php');
   require('function/q19.php');
  ?>
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
       
        <h1 class="introTxt">Details request</h1>
        <p>This page include all the different request for details. </p>       
        <p><a class="navLink" href="../index.html">click here to return to the home page</a></p>
        <h3>If an error occre while loading the page , try pressing CTRL while reloading the page multiple time. The permitions should load correctly eventually </h3>
    </div>
    
         
    <details>
        <summary>#11  Details of all company   (????)?????</summary>
        
        <form method="post">
            
            <input type="submit" value="Submit" id="submitQ12" name="button1">   
        </form>

        <table class="displayTable">
            <tr>
                <th>Company name</th>
                <th>Head office location</th>
                <th>CEOs name </th>
                <th>Numbers of employees</th>
                <th>Numbers of research center</th>
                <th>Total number of researcher</th>
                <th>Number of manufacturing facilities</th>
                <th>Product capacity</th>
                <th>Number of warehouses</th>
                <th>Total warehouses capacity</th>
            </tr>
             <?php
               if(array_key_exists('button1', $_POST)) {
                 button1();
               }  
             ?>
        </table>
        
        
    </details>

    <details>
        <summary>#12  Details of all companies with a warehouse in every country with at least one contract.   (????)?*:???</summary>
        <form method="post">
            <label for="submitQ12">Select a project</label>
            
            <input type="submit" value="Submit" id="submitQ12" name="button12">   
        </form>

        <table class="displayTable">
            <tr>
                <th>companies name</th>
                <th>country name </th>
                <th>Total number capacity for the wearhouse in that country</th>
                
            </tr>
               <?php
                 if(array_key_exists('button12', $_POST)) {
                   button12();
                 }  
             ?>
        </table>
    </details>
    <details>
        <summary>#13  Details of all companies with no contract in country where the head office is located.   ???? \(°?°)/ ? ???</summary>
        <form method="post">
            <label for="submitQ13">Get detailes</label>
            
            <input type="submit" value="Submit" id="submitQ13" name="button13">   
        </form>

        <table class="displayTable">
            <tr>
                <th>Company id</th>
                <th>Company name</th>
                <th>Facility city</th>
                <th>Facility country</th>
                <th>Client country</th>
                
            </tr>
            
                 <?php
      
                   if(array_key_exists('button13', $_POST)) {
                      button13();
                    }  
                   
                  
                ?>
            
        </table>
    </details>

    <details>
        <summary>#14  Details of all contract for Pfizer  (?°?°)??/(.? . \)</summary>
        <form method="post">
            <label for="submitQ14">Get detailes</label>
            
            <input type="submit" value="Submit" id="submitQ14" name="button14">   
        </form>

        <table class="displayTable">
            <tr>
                <th>Client name</th>
                <th>Contract date</th>
                <th>Product name</th>
                <th>Quantity purchased</th>
                <th>Total value of contract</th>   
                <th>total amount</th>            
            </tr>
            
            <?php
              if(array_key_exists('button14', $_POST)) {
                button14();
              }  
            ?> 
        </table>
    </details>

    <details>
        <summary>#15  Details of all contract signed by every client. (????)? ???</summary>
        <form method="post">
            <label for="submitQ15">Get detailes</label>
            
            <input type="submit" value="Submit" id="submitQ15" name="button15">   
        </form>

        <table class="displayTable">
            <tr>
                <th>Client name</th>
                <th>Name of pharmaceutical company</th>
                <th>Contract date</th>
                <th>Product name</th>
                <th>Quantity purchased</th>
                <th>Total value of the contract</th>            
            </tr>
             <?php
              if(array_key_exists('button15', $_POST)) {
                button15();
              }  
            ?> 
        </table>
    </details>

    <details>
        <summary>#16  Details of all researcher who worked for at least three different companies.   (°Õ°)? ~~~~+--+ </summary>
        <form method="post">
            <label for="submitQ16">Get detailes</label>
            
            <input type="submit" value="Submit" id="submitQ16" name="button16">   
        </form>

        <table class="displayTable">
            <tr>
                <th>SSN</th>
                <th>Name</th>
                <th>Citizenship</th>
                <th>Company names</th>
               
                          
            </tr>
            <?php
               if(array_key_exists('button16', $_POST)) {
                 button16();
               }  
             ?>
        </table>
    </details>


    <details>
        <summary>#17  Details of all researcher who worked for all projects for Pfizer   ---?( º _ º?)</summary>
        <form method="post">
            <label for="submitQ17">Get detailes</label>
            
            <input type="submit" value="Submit" id="submitQ17" name="button17">   
        </form>

        <table class="displayTable">
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Email-address</th>
                <th>Total number of hours worked</th>       
               
            </tr>
            <?php
               if(array_key_exists('button17', $_POST)) {
                 button17();
               }  
            ?>
        </table>
    </details>
    
    <details>
        <summary>#19  Report of all the projects thats are performed by 
            Pfizer reasearch center that are located in the United States Of America     (??•`?•´)?
        </summary>
        <form method="post">
            <label for="submitQ19">Get detailes</label>
            
            <input type="submit" value="Submit" id="submitQ19" name="button19">   
        </form>

        <table class="displayTable">
            <tr>
                <th>facility_name</th>
                <th>facility_address</th>
                <th>facility_city</th>
                <th>team_name</th>
                <th>project_name</th>
                <th>start_date</th>
                <th>end_date</th>
                <th>number_of_researchers</th> 
                <th>total_hours_worked</th>           
            </tr>
            
            
           <?php
              if(array_key_exists('button19', $_POST)) {
                button19();
              }  
            ?> 
        </table>
    </details>

   
    <footer>
        <?php include "footer.php"; ?>
    </footer>
</div>

    


</body>
</html>