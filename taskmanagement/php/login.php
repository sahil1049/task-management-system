<?php include('main.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Task Management</title>
  <link rel="stylesheet" type="text/css" href="../css/style.css">


	<script>
		function myFunction() {
  var x = document.getElementById("pass");

  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
	</script>
	   <link rel = "icon" href =  
"icon.png" 
        type = "image/x-icon">
</head>

<body>



<div class="wrapper">
						<div class="container">
							<h1>Welcome !!</h1>
							<?php include('errors.php'); ?>
							<form class="form" method="post" action="login.php">
								<input type="text" name="username"  placeholder="Username"  required>
								<input type="password" name="password" placeholder="Password" id="pass" required >
								 <i onclick="myFunction()"class="fa fa-eye"></i><br>

							
								
								<a class="rec" href="./forgetpass.php" >Forgot password?</a> 
                <br>  <br>
								<button type="submit"  name="login_user" id="login-button">Sign In</button>
							<br><br>
								<p>
                                Not yet a member? <a style="color:white"href="./register.php">Sign up</a>
  	                       
  	                     
  	                     
                                <a style="color:white"href="../index.php">Home</a>
  	                       </p>
	
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

</body>
</html>