<!DOCTYPE html>
<?php require('function/companyQuery.php'); ?>
<?php require('function/q1Display.php'); ?>
<?php require('function/employeQuerry.php'); ?>
<?php require('function/facilityQuerry.php'); ?>
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
       
        <h1 class="introTxt">Company</h1>
        <p>This page allow to manage company. It represent the request #1</p>       
        <p><a class="navLink" href="../index.html">click here to return to the home page</a></p>
    </div>
    <details>
        <summary>Create</summary>
        <form action="function/q1Creat.php" method="post">
            <label for="compCrEllementOne">Element one</label>
            <input type="text" name="comp_name" id="compCrEllementOne">
            <input type="submit" value="Submit">
        </form>

      
    </details>
    <details>
        <summary>Delete</summary>
        <form action="function/q1Del.php" method="post">
            <label for="compDelSelect">Select a company</label>
            <select id="compDelSelect" name="select_comp">
              <?php getCompany();?>
            </select>
            <input type="submit" value="Submit">   
        </form>
    </details>

    <details>
        <summary>Edit</summary>
        <form action="function/q1Edit.php" method="post">
            <label for="compEditSelect">Select a company :</label>
            <select id="compEditSelect" name="select_comp">
              <?php getCompany();?>
            </select>
          
            <label for="compEdiEllementOne">Element one</label>
            <input type="text" name="new_name" id="compEdiEllementOne">
            <input type="submit" value="Submit">   
        </form>
    </details>

    <details>
        <summary>Display</summary>
        <form  method="post">
            <label for="compDispSelect">Select a company</label>
            <select id="compDispSelect" name="select_comp">
                <?php getCompany();?>
            </select>
            <input type="submit" value="Submit" name="display">   
        </form>

        <table class="displayTable">
            <tr>
                <th>Name</th>
                <th>Company ID</th>
                
            </tr>
            <?php
                   if(array_key_exists('display', $_POST)) {
                      compDisplay();
                    }  
                   
                ?>
        </table>
    </details>

    <details>
        <summary>#9 Assigne a new CEO</summary>
        <form action="function/q9.php" method="post">
            <label for="compCompSelect">Select a company :</label>
            <select id="compCompSelect" name="sel_comp">
               <?php getFacility(); ?>
            </select>

            <label for="compCEOSelect">Select a CEO :</label>
            <select id="compCEOSelect" name="sel_emp">
             <?php getEmp(); ?>
             
            </select>
            <input type="submit" value="Submit">   
        </form>
       
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