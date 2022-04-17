<!DOCTYPE html>
<?php require('function/clientQuerry.php'); ?>
<?php require('function/q7Display.php'); ?>

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
       
        <h1 class="introTxt">Client</h1>
        <p>This page allow to manage client. It represent the request #7</p>       
        <p><a class="navLink" href="../index.html">click here to return to the home page</a></p>
    </div>
    <details>
        <summary>Create</summary>
        <form action="function/q7Create.php" method="post">
            <label for="cliCrEllementOne">client name</label>
            <input type="text" name="cli_name" id="cliCrEllementOne">
            <label for="cliCrEllementTwo">client email</label>
            <input type="text" name="cli_email" id="cliCrEllementTwo">
            <label for="cliCrEllementTree">client phone</label>
            <input type="text" name="cli_phone" id="cliCrEllementTree">
            <label for="cliCrEllementTree">client full name</label>
            <input type="text" name="cli_contract" id="cliCrEllementTree">
            <label for="cliCrEllementTree">client address</label>
            <input type="text" name="cli_address" id="cliCrEllementTree">
            <label for="cliCrEllementTree">client city</label>
            <input type="text" name="cli_city" id="cliCrEllementTree">
            <label for="cliCrEllementTree">client province</label>
            <input type="text" name="cli_prov" id="cliCrEllementTree">
            <label for="cliCrEllementTree">client country</label>
            <input type="text" name="cli_country" id="cliCrEllementTree">
            <label for="cliCrEllementTree">client postal</label>
            <input type="text" name="cli_postal" id="cliCrEllementTree">
            
            <input type="submit" value="Submit">
        </form>


      
    </details>
    <details>
        <summary>Delete</summary>
        <form action="function/q7Del.php" method="post" >
            <label for="cliDelSelect">Select a client</label>
            <select id="cliDelSelect" name="sel_client">
               
               <?php getClient() ?>;
               
            </select>
            <input type="submit" value="Submit">   
        </form>
    </details>

    <details>
        <summary>Edit</summary>
        <form action="function/q7Edit.php" method="post">
            <label for="cliEditSelect">Select a client :</label>
            <select id="cliEditSelect" name="sel_cli">
              <?php getClient() ?>;
            </select>
            <label for="cliEdiEllementOne">new email adress</label>
            
            <input type="text" name="cli_email" id="cliEdiEllementOne">
            
            <input type="submit" value="Submit">   
             
        </form>
    </details>

    <details>
        <summary>Display</summary>
        <form method="post">
            <label for="cliDispSelect">Select a client</label>
            <select id="cliDispSelect" name="sel_cli">
                   <?php getClient() ?>;
            </select>
            <input type="submit" value="Submit" name="display">   
        </form>

        <table class="displayTable">
            <tr>
                <th>client id</th>
                <th>client name</th>
                <th>client email</th>
                <th>client phone</th>
                <th>client contact</th>
                <th>client address</th>
                <th>client city</th>
                <th>client province</th>
                <th>client country</th>
                <th>client postal</th> 
            </tr>
             <?php
             
                   if(array_key_exists('display', $_POST)) {
                      clientDisplay();
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