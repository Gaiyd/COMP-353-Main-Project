<!DOCTYPE html>
<?php require('function/clientQuerry.php'); ?>
<?php require('function/companyQuery.php'); ?>
<?php require('function/contractQuerry.php'); ?>
<?php require('function/q8Display.php'); ?>
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
       
        <h1 class="introTxt">Contract</h1>
        <p>This page allow to manage contract. It represent the request #8</p>       
        <p><a class="navLink" href="../index.html">click here to return to the home page</a></p>
    </div>
    <details>
        <summary>Create</summary>
        <form action="function/q8Create.php" method="post">
            <label for="contCrEllementOne">total_amount</label>
            <input type="text" name="cont_amount" id="contCrEllementOne">
            <label for="contCrEllementTwo">client_id</label>
            
             <select id="contCrEllementTwo" name="cont_cli_id">
               
               <?php getClient() ?>;
               
            </select>
            
            <label for="contCrEllementTree">company_id</label>
            
            <select id="contCrEllementTree" name="cont_comp_id">
               
               <?php getCompany() ?>;
               
            </select>
            
            <label for="contCrEllementTree">contract_company_sign</label>
            <input type="text" name="cont_comp_sign" id="contCrEllementFive">
            
            <label for="contCrEllementTree">contract_client_sign</label>
            <input type="text" name="cont_cli_sig" id="contCrEllementSix">
            
            <label for="contCrEllementTree">contract_signed_on</label>
            <input type="text" name="cont_sign_on" id="contCrEllementSeven">
            
            <label for="contCrEllementTree">expected_delivery</label>
            <input type="text" name="cont_del" id="contCrEllementEight">
            
            <input type="submit" value="Submit">
        </form>


    </details>
    <details>
        <summary>Delete</summary>
        <form action="function/q8Del.php" method="post">
            <label for="contDelSelect">Select a contract</label>
            <select id="contDelSelect" name="sel_contract">
                 <?php getContract() ?>;
            </select>
            <input type="submit" value="Submit">   
             
        </form>
    </details>

    <details>
        <summary>Edit</summary>
        <form action="function/q8Edit.php" method="post">
            <label for="contEditSelect">Select a contract :</label>
            <select id="contEditSelect" name="sel_cont">
                <?php getContract() ?>;
            </select>
            
            <label for="contEdiEllementOne">New devivery date</label>
            <input type="text" name="cont_del_date" id="contEdiEllementOne">
            
            <input type="submit" value="Submit">   
        </form>
    </details>

    <details>
        <summary>Display</summary>
        <form method="post">
            <label for="contDispSelect">Select a contract</label>
            <select id="contDispSelect" name="sel_cont">
                <?php getContract() ?>;
            </select>
            <input type="submit" value="Submit" name="display">   
        </form>

        <table class="displayTable">
            <tr>
                <th>contract_id</th>
                <th>total_amount</th>
                <th>client_id</th>
                <th>company_id</th>
                <th>contract_company_sign</th>
                <th>contract_client_sign</th>
                <th>contract_signed_on</th>
                <th>expected_delivery</th>
            </tr>
           
          
             <?php
                   if(array_key_exists('display', $_POST)) {
                      contractDisplay();
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