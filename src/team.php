<!DOCTYPE html>
<?php require('function/facilityQuerry.php'); ?>
<?php require('function/projectQuery.php'); ?>
<?php require('function/employeQuerry.php'); ?>
<?php require('function/teamQuerry.php'); ?>
<?php require('function/q4Display.php'); ?>
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
       
        <h1 class="introTxt">Team</h1>
        <p>This page allow to manage team. It represent the request #4</p>       
        <p><a class="navLink" href="../index.html">click here to return to the home page</a></p>
    </div>
    <details>
        <summary>Create</summary>
        <form action="function/q4Create.php" method="post">
            <label for="teamCrEllementOne">Project</label>
            <select id="teamDelSelect" name="team_project">
                <?php echo getProject() ?>
            </select>
            <label for="teamCrEllementTwo">facility </label>
            <select id="teamCrEllementTwo" name="team_facility">
               <?php echo getFacility() ?>
            </select>
            <label for="teamCrEllementTree">team_name</label>
            <input type="text" name="team_name" id="teamCrEllementTree">
            
             <label for="teamCrEllementFour">leader</label>
             <select id="teamCrEllementFour" name="team_leader">
               <?php echo getEmp() ?>
             </select>
            
            <input type="submit" value="Submit">
        </form>

      
    </details>
    <details>
        <summary>Delete</summary>
        <form action="function/q4Del.php" method="post">
            <label for="teamDelSelect">Select a team</label>
            <select id="teamDelSelect" name="sel_team">
              <?php echo getTeam();?>
            </select>
            <input type="submit" value="Submit">   
        </form>
    </details>

    <details>
        <summary>Edit</summary>
        <form action="function/q4Edit.php" method="post">
            <label for="teamEditSelect">Select a team :</label>
            <select id="teamEditSelect" name="sel_team">
                <?php echo getTeam();?>
            </select>
        
            <label for="teamEdiEllementOne">new team name</label>
            <input type="text" name="team_name" id="teamEdiEllementOne">
            
            <input type="submit" value="Submit">   
        </form>
    </details>

    <details>
        <summary>Display</summary>
        <form method="post">
            <label for="teamDispSelect">Select a team</label>
            <select id="teamDispSelect" name="sel_team">
               <?php echo getTeam();?>
            </select>
            <input type="submit" value="Submit" name="display">   
        </form>

        <table class="displayTable">
            <tr>
                <th>team_id</th>
                <th>project_id</th>
                <th>facility_id</th>
                <th>team_name</th>
                <th>leader_id</th>

            </tr>

              <?php
                   if(array_key_exists('display', $_POST)) {
                      teamDisplay();
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