<!DOCTYPE html>
<?php require('function/q18.php'); ?>
<?php require('function/q20.php'); ?>
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
       
        <h1 class="introTxt">Project</h1>
        <p>This page allow to manage project. It represent the request #5</p>       
        <p><a class="navLink" href="../index.html">click here to return to the home page</a></p>
        <h3>If an error occre while loading the page , try pressing CTRL while reloading the page multiple time. The permitions should load correctly eventually </h3>
    </div>
    
    <details>
        <summary>#18  Report of the total hours assigned to researchers throughout their career.</summary>
        <form method="post">
            <label for="submitQ18">Get detailes</label>
            
            <input type="submit" value="Submit" id="submitQ18" name="button18">   
        </form>

        <table class="displayTable">
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Email adress</th>
                <th>Total number of hours worked</th> 
                           
            </tr>
           
           <?php
              if(array_key_exists('button18', $_POST)) {
                button18();
              }  
            ?>
        </table>
    </details>

   
   <details>
          <summary>#20  yearly report of sales for each company from 2019 to 2022.  ٩(^෴^)۶  </summary>
          <form method="post">
              <label for="submitQ20">Get detailes</label>
              
              <input type="submit" value="Submit" id="submitQ18" name="button20">   
          </form>
  
          <table class="displayTable">
              <tr>
                  <th>Company name</th>
                  <th>Year</th>
                  <th>Total amounts</th>          
              </tr>
             
             <?php
                if(array_key_exists('button20', $_POST)) {
                  button20();
                }  
              ?>
          </table>
      </details>
      
 
    

    <footer>
        <ul>
      <?php include "footer.php"; ?>
    </footer>
</div>

    


</body>
</html>