<!DOCTYPE html>
<?php require('function/facilityQuerry.php'); ?>
<?php require('function/projectQuery.php'); ?>
<?php require('function/researcherQuery.php'); ?>
<?php require('function/q5Display.php'); ?>
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
    </div>
    <details>
        <summary>Create</summary>
        <form action="function/q5Create.php" method="post">
            <label for="projCrEllementOne">Facility</label>
            
            <select id="projCrEllementOne" name="proj_fac">
               <?php getFacility() ?>;
            </select>
            
            <label for="projCrEllementTwo">Project name</label>
            <input type="text" name="pro_name" id="projCrEllementTwo">
            <label for="projCrEllementTree">Start date</label>
            <input type="text" name="proj_start" id="projCrEllementTree">
            <label for="projCrEllementTree">end date</label>
            <input type="text" name="proj_start" id="projCrEllementTree">
            <input type="submit" value="Submit">
        </form>

      
    </details>
    <details>
        <summary>Delete</summary>
        <form action="function/q5Del.php" method="post">
            <label for="projDelSelect">Select a project</label>
            <select id="projDelSelect" name="sel_proj">
            
                <?php getProject() ?>;
            
            </select>
            <input type="submit" value="Submit">   
        </form>
    </details>

    <details>
        <summary>Edit</summary>
        <form action="function/q5Edit.php" method="post">
            <label for="projEditSelect">Select a project :</label>
            <select id="projEditSelect" name="Sel_proj">
               <?php getProject() ?>;
            </select>
            <label for="projEdiEllementOne">New end date</label>
            <input type="text" name="pro_enddate" id="projEdiEllementOne">
        
            <input type="submit" value="Submit">   
        
        </form>
    </details>

    <details>
        <summary>Display</summary>
        <form method="post">
            <label for="projDispSelect">Select a project</label>
            <select id="projDispSelect" name="Sel_proj">
               <?php getProject() ?>;
            </select>
            <input type="submit" value="Submit" name="display">   
        </form>

        <table class="displayTable">
            <tr>
                <th>project_id</th>
                <th>facility_id</th>
                <th>name</th>
                <th>start_date</th>
                <th>end_date</th>
                
            </tr>
              <?php
                   if(array_key_exists('display', $_POST)) {
                      proDisplay();
                    }   
            ?>
        </table>
    </details>

    <details>
        <summary>#10 Assigne a researcher to a project</summary>
        <form action="function/q10.php" method="post" >
            <label for="projProjSelect">Select a project :</label>
            <select id="projProjSelect" name="Selec_project">
                 <?php
                 getProject()
               ?>
            </select>

            <label for="projResearchSelect">Select a researcher :</label>
            <select id="projResearchSelect" name="Select_researcher">
               <?php
                 getReseracher();
               ?>
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