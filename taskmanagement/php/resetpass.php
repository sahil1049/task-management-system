<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'taskmanagement');


if(!isset($_GET["code"])){
    exit("Cant find page");
}
$_SESSION['code']= $_GET["code"];






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Task Management</title>
          <link rel = "icon" href =  
"icon.png" 
        type = "image/x-icon"> 
        <script>
  			function myFunction() {
  var x = document.getElementById("password");
  var y = document.getElementById("password1");
  if ((x.type === "password")||(y.type==="password")) {
    x.type = "text";
    y.type = "text";
  } else {
    x.type = "password";
    y.type = "password";
  }
}
  </script>
   
</head>
<body>
<div class="wrapper">
            <div class="container">
<form method="POST" action="passwordupdated.php">
<div class="form-group">
    
   <input type="password" id="password" name="password" placeholder="Password" required>
   <input type="password" id="password1"name="password1" placeholder="Confirm Password" required>
   <i onclick="myFunction()"class="fa fa-eye"></i><br><br>
  </div>
    <br>
    <button type="submit"  name="login_user" id="login-button"  >Update</button>
 
</form>
  </div>
            
            <ul class="bg-bubbles">
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
              <li></li>
            </ul>
          </div>

</html>

