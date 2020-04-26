<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" type="text/css" href="index.css">
    <link href="https://fonts.googleapis.com/css2?family=Cinzel&display=swap" rel="stylesheet">

    <title>Task Management</title>

</head>
<body>
<nav class="menu" id="menu">
  <div class="menu__btn" id="menu__btn"></div>
  <div class="menu__linkContainer" id="menu__linkContainer">
    <span class="menu__title">Navigation</span>

    <?php 
          if(!isset($_SESSION['username']))
          {
            
           echo" <a href='php/login.php' class='menu__link'>Login</a>";
           echo" <a href='php/register.php' class='menu__link'>Sign Up</a>";
          }
        else{
            if($_SESSION['username']=='admin'){
                echo" <a href='php/admin.php' class='menu__link'>Admin Panel</a>";
            }
         else{
            echo" <a href='php/tasks.php' class='menu__link'>Tasks</a>";
            echo" <a href='php/onlineusers.php' class='menu__link'>Chat</a>";
         }
        echo" <a href='php/tasks.php?logout='1'' class='menu__link'>Logout</a>";
        }

    ?>
    <!-- <a href="#" class="menu__link">Blog</a>
    <a href="#" class="menu__link">Contact</a> -->
    <div class="menu__socialContainer">
             <span href="#" class="menu__copyright">© Copyright
</span>
       <a href="#" class="menu__socialLink">Facebook</a>
         <a href="#" class="menu__socialLink">Instagram</a>
         <a href="#" class="menu__socialLink">Twitter</a>
    </div>
  </div>
</nav>

<main id="main">
  <div style=""><h1 style="padding:30px;background-color:rgb(0,0,0,0.4);color:whitesmoke;font-family: 'Cinzel', serif;" >TASK MANAGEMENT SYSTEM</h1>
  <h2 style="">Prashnottar Pvt. Ltd.</h2></div>
</main>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
<script src="index.js">

</script>
</html>