<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'taskmanagement');



$code= $_SESSION['code'];

$getEmailQuery = mysqli_query($db, "SELECT email FROM resetpasswords WHERE code='$code'");
if(mysqli_num_rows($getEmailQuery)==0){
    exit("Cant find page");
}
if($_POST["password"]==$_POST["password1"]){
if(isset($_POST["password"])){
    $pw =$_POST["password"];
    $pw=md5($pw);

    $row= mysqli_fetch_array($getEmailQuery);
    $email=$row["email"];
    $query=mysqli_query($db, "UPDATE users SET password='$pw' WHERE email='$email'");
    if ($query){
        $query= mysqli_query($db,"DELETE FROM resetpasswords WHERE code='$code'");
        // exit("<a style=margin:auto auto; href=explore.php>login page</a>" );
        exit("<script type='text/javascript'>alert('Password updated. Click here to go to login page');
        window.location.href='login.php';
        </script>");
    }
    else{
        exit("Something went wrong");
    }
}
}



?>