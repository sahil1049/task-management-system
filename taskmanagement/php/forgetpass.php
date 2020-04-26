<?php
   
$db = mysqli_connect('localhost', 'root', '', 'taskmanagement');
require 'main.php';
if($_POST){
    $email=$_POST['email'];
    $emailquery=mysqli_query($db,"select * from users where email='{$email}'")or die(mysqli_error($db));
   
    $count=mysqli_num_rows($emailquery);
    $row=mysqli_fetch_array($emailquery);

    $code=uniqid(true);

    $query= mysqli_query($db, "INSERT INTO resetpasswords(code,email) VALUES ('$code','$email')" );
    if(!$query){
        exit("Error");
    }

    if($count>0){



// Load Composer's autoloader


    // Attachments
    // Optional name

    // Content
    $url = "http://" . $_SERVER["HTTP_HOST"] . dirname($_SERVER["PHP_SELF"]) . "/resetpass.php?code=$code";
   $body = [
    'Messages' => [
        [
            'From' => [
                'Email' => "email id",
                'Name' => "no reply"
            ],
            'To' => [
                [
                    'Email' => "$email",
                    'Name' => ""
                ]
            ],
            'Subject' => "Reset Password link.",
            'HTMLPart' => "<h3>Click this link to reset your password</h3><br />$url"
        ]
    ]
];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.mailjet.com/v3.1/send");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json')
);

curl_setopt($ch, CURLOPT_USERPWD, "public api:private api");
$server_output = curl_exec($ch);
curl_close ($ch);

$response = json_decode($server_output);
if ($response->Messages[0]->Status == 'success') {

}
  echo("<script type='text/javascript'>alert('A link has been sent to your registered email id .Please update your password');
    window.location.href='login.php';
    </script>");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Task Management</title>
       <link rel = "icon" href =  
"icon.png" 
        type = "image/x-icon"> 
 <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>

     <div class="wrapper">
						<div class="container">
							<h1>Welcome !!</h1>
							<?php include('errors.php'); ?>
							<form class="form" method="POST" action="forgetpass.php">
								<input type="text" name="email" required  placeholder="Email">
								<button type="submit"   id="login-button">Recover</button>
                            <br><br>
                           
								<p>
                                Already a member? <a class="rec"  href="login.php">Sign in</a>
                                <br>
                                Not yet a member?  <a class="rec" href="./register.php">Sign up</a>
                              
  	                       
                         
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
