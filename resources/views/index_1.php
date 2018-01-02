<?php
session_start();
ob_start();

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Tasty Recipes</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="resources/css/resetStylesheet.css"/>
        <link rel="stylesheet" type="text/css" href="resources/css/style.css"/>
        
    </head>

    <body>
         
        
            <div id="header">
                 <h1>Tasty Recipes</h1>
          
            </div>
        <div> 
            <a href="index.php" class="btn" > Home</a> <a href="resources/views/calendar.php" class="btn">Calendar</a> 
        </div>
      <?php
      if(isset($_SESSION['u_id'])){
          echo "<form action='logout.php' method='POST'>
            <button class='btn' type='submit' name='submitLogout'>Logout</button>
             </form>";
      
           }else{
             echo "<form action='login.php' method='POST'>
            <input type='text' name='uid' placeholder='Username'>
            <input type='password' name='pwd' placeholder='Password'>
            <button class='btn' type='submit' name='submitLogin'>Login</button>
                </form>";}
              echo "<form action='resources/views/signup.php' method='POST'>
                 <button class='btn' type='submit' name='submit'>SignUp</button>
                 </form>";
        
         
          
                
          
                 
                 
           
             ?>


<div id="contentt">
            <div id="nav">
                 
                <h2>The Tasty Recipes </h2>
                <p>Welcome to our web site where you will find the most delicious recipes.</p>
                <p>The recipes web site was grounded 2017 after 30 years of experience from 4 cooker in running a restaurant chain.</p>
                <p>In the Calendar above you can find the recipes for the day's meal.</p>
                <p>We update our menus every month, so don't forget to check our calendar occasionally. </p>
                <p>Our recipes are purely Swedish and contains the Swedish magical and delicate tastes</p>
                
            </div>
            <div id="tasty"> 
                <img class="imagehome" src="resources/images/swedishfood.jpg" alt="swedish food image"  >
            </div>
        </div>



 <div id="footer">
            Copyrights &copy; reserved 2017.
        </div>
       
   
    </body>
</html>
