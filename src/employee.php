<!DOCTYPE html>

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
<?php require('function/facilityQuerry.php'); ?>
<?php require('function/employeQuerry.php'); ?>
<?php require('function/q3Display.php'); ?>

<div class="wrapper">
    <div class="centerText">
        <h1 class="introTxt">Employee</h1>
        <p>This page allow to manage employee. It represent the request #3</p>       
        <p><a class="navLink" href="../index.html">click here to return to the home page</a></p>
    </div>
    <details>
        <summary>Create</summary>
       
        <form action="function/q3Create.php" method="post">
            <label for="empCrEllementOne">employee first </label>
            <input type="text" name="emp_fname" id="empCrEllementOne">
            
            <label for="empCrEllementTwo">employee last </label>
            <input type="text" name="emp_lname" id="empCrEllementTwo">
            
            <label for="empCrEllementTree">employee dob </label>
            <input type="text" name="emp_dob" id="empCrEllementTree">
            
            <label for="empCrEllementFour">employee ssn </label>
            <input type="text" name="emp_ssn" id="empCrEllementFour">
            
            <label for="empCrEllementFive">employee phone </label>
            <input type="text" name="emp_phone" id="empCrEllementFive">
            
            <label for="empCrEllementSix">employee address </label>
            <input type="text" name="emp_address" id="empCrEllementSix">
            
            <label for="empCrEllementSeven">employee city </label>
            <input type="text" name="emp_city" id="empCrEllementSeven">
            
            <label for="empCrEllementEight">employee province </label>
            <input type="text" name="emp_province" id="empCrEllementEight">
            
            <label for="empCrEllementNine">employee country </label>
            <input type="text" name="emp_country" id="empCrEllementNine">
            
            <label for="empCrEllementTen">employee postal </label>
            <input type="text" name="emp_postal" id="empCrEllementTen">
            
            <label for="empCrEllementEleven">employee citizenship </label>
            <input type="text" name="emp_citizenship" id="empCrEllementEleven">
            
            <label for="empCrEllementTwelve">employee email </label>
            <input type="text" name="emp_email" id="empCrEllementTwelve">
            
            <label for="empCrEllementThirteen">facility id </label>
             <select id="empCrEllementThirteen" name="emp_fac_id">
               <?php getFacility() ?>;
            </select>
            
            <label for="empCrEllementFourteen">employee task </label>
            <select  name="emp_task" id="empCrEllementFourteen">
                <option value="Admin">Admin</option>
                <option value="CEO">CEO</option>
                <option value="Manager">Manager</option>
                <option value="Operator">Operator</option>
                <option value="Researcher">Researcher</option>
                <option value="Secretary">Secretary</option>
                <option value="Shipper">Shipper</option>
                <option value="Technician">Technician</option>
               
            </select>
            
            <label for="empCrEllementFifteen">employee salary </label>
            <input type="text" name="emp_salary" id="empCrEllementFifteen">
            
            <label for="empCrEllementSixteen">employee start </label>
            <input type="text" name="emp_start" id="empCrEllementSixteen">
            
            <label for="empCrEllementSeventeen">employee end </label>
            <input type="text" name="emp_end" id="empCrEllementSeventeen">
            
            <input type="submit" value="Submit">
            
             
        </form>

      
    </details>
    <details>
        <summary>Delete</summary>
        <form action="function/q3Del.php" method="post">
            <label for="empDelSelect">Select an employee</label>
            <select id="empDelSelect" name="sel_emp">
                <?php getEmp() ?>;
            </select>
            <input type="submit" value="Submit">   
        </form>
    </details>

    <details>
        <summary>Edit</summary>
        <form action="function/q3Edit.php" method="post">
            <label for="empEditSelect">Select an employee :</label>
            <select id="empEditSelect" name="sel_emp">
                <?php getEmp() ?>;
                
            </select>
             
            <label for="empEdiEllementOne">new task</label>
            <select  name="emp_task" id="empEdiEllementOne">
                <option value="Admin">Admin</option>
                <option value="CEO">CEO</option>
                <option value="Manager">Manager</option>
                <option value="Operator">Operator</option>
                <option value="Researcher">Researcher</option>
                <option value="Secretary">Secretary</option>
                <option value="Shipper">Shipper</option>
                <option value="Technician">Technician</option>
               
            </select>
            <label for="empEdiEllementTwo">new favility</label>
            <select  name="emp_fac" id="empEdiEllementmheee">
              <?php getFacility() ?>;
            </select>
            <input type="submit" value="Submit">   
        </form>
    </details>

    <details>
        <summary>Display</summary>
        <form method="post">
            <label for="empDispSelect">Select an employee</label>
            <select id="empDispSelect" name="sel_emp">
                 <?php getEmp() ?>;
            </select>
            <input type="submit" value="Submit" name="display">   
        </form>

        <table class="displayTable">
            <tr>
                <th>id</th>
                <th>first</th>
                <th>last</th>
                <th>dob</th>
                <th>ssn</th>
                <th>phone</th>
                <th>address</th>
                <th>city</th>
                <th>province</th>
                <th>province</th>
                <th>country</th>
                <th>postal</th>
                <th>citizenship</th>
                <th>email</th>
                <th>id</th>
                <th>task</th>
                <th>salary</th>
                <th>start</th>
                <th>end</th>
            </tr>
            <?php
                   if(array_key_exists('display', $_POST)) {
                      empDisplay();
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