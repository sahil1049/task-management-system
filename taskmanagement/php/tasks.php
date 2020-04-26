<?php
session_start();
  if($_SESSION['username']=="admin"){
    header('location: admin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: index.php");
  }
  if(!isset($_SESSION['username'])){
    header('location: login.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>



    	
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

<!-- CSS
================================================== -->
<!-- Fontawesome Icon font -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
<!-- Twitter Bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
<!-- jquery.fancybox  -->
    <link rel="stylesheet" href="css/jquery.fancybox.css">
<!-- animate -->
    <link rel="stylesheet" href="css/animate.css">
<!-- Main Stylesheet -->
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/about.css">
<!-- media-queries -->
    <link rel="stylesheet" href="css/media-queries.css">
    <title>Task Management</title>
</head>
<body>
<a class="btn btn-xl btn-warning" style="margin:10px" href="../index.php">Home</a>
<a class="btn btn-xl btn-danger" style="margin:10px"  href="tasks.php?logout='1'">Log out</a>
<div class="container">
<h1 class="text-center" style="margin:60px ">Tasks Assigned</h1>
</div>
<div class="container">
<div class="row">
<?php

// echo "






// <table class='table table-bordered table striped'>
//   <thead>
//     <tr>
//     <th scope='col'>S.no</th>
//       <th scope='col'>Task</th>
//       <th scope='col'>Deadline</th>
//     </tr>
//     </thead>
//   </table>
//    ";
$db = mysqli_connect('localhost', 'root', '', 'taskmanagement');
$username=$_SESSION['username'];

$query="SELECT * from users where username='$username'";
$result=mysqli_query($db,$query);
$row=mysqli_fetch_array($result, MYSQLI_ASSOC);
$userid=$row['userid'];
$task="SELECT * from tasks where user_id=$userid";
$result1=mysqli_query($db,$task);
$n=1;
while($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)){
  $task1=$row1['task'];
  $deadline=$row1['deadline'];
  echo "

   <div  class='team-member col-md-3 col-sm-6 col-xs-12  text-center wow fadeInUp animated' data-wow-duration='500ms' data-wow-delay='900ms'>
  <div class='member-thumb bg-dark  ' style='padding:150px;'>
  <h2 class='text-center'> </h2>
  <h1>Task$n </h1>
  <p style='color:grey'>Details</p>
  
    <figcaption class='overlay '>
   
       
    <h5>Task</h5>
      <p>$task1</p>
      <br>
      <h5>Deadline</h5>
      <p>$deadline</p>
    
    </figcaption>
  </div>
  <br>
</div>

  ";
$n=$n+1;


}


?>

<!-- </table>
     -->
     </div>
     </div>
</body>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- Google Map -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
		<!-- jquery easing -->
		<script src="js/jquery.easing.min.js"></script>
	
		<!-- jquery easing -->
        <script src="js/wow.min.js"></script>
</html>