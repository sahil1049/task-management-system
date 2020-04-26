<?php


$db = mysqli_connect('localhost', 'root', '', 'taskmanagement');
extract($_POST);
if(isset($_POST['username']) && isset($_POST['password'])&&isset($_POST['email'])
&&isset($_POST['status'])){

    $query="INSERT INTO `users`(`username`,`password`,`email`,`status`) VALUES ('$username',
    '$password','$email','$status')";
    mysqli_query($db,$query);

}



if(isset($_POST['readrecords'])){
    $data ='<table class="table table-bordered table striped">
              <tr>
              <th>Username</th>
              <th>Password</th>
              <th>Email</th>
              <th>Status</th>
             <th>EditProfile</th>
             <th>Delete Profile</th>
             <th>Assign Task</th>
        




              </tr>';
              $displayquery="SELECT * FROM `users`";
              $result=mysqli_query($db,$displayquery);
              if(mysqli_num_rows($result)>0){
                  $number=1;
                  while($row=mysqli_fetch_array($result)){
                      $user=$row['username'];
                      $data .='<tr>
                      
                      <td>'.$row['username'].'</td>
                      <td>'.$row['password'].'</td>
                      <td>'.$row['email'].'</td>
                      <td>'.$row['status'].'</td>
                
                      <td>
                      
                      <button onclick="GetUserDetails('.$row['userid'].')"
                      class="btn btn-warning">Edit</button>
                      </td>
                      <td>
                      <button onclick="deleteRecord('.$row['userid'].')"
                      class="btn btn-danger">Delete</button>
                      </td>
                      <td>
                      <button onclick="Task('.$row['userid'].')"
                      class="btn btn-primary">Assign Task</button>
                      </td>
                      </tr>';
                  
                  }

              }
              $data .='</table>';
              echo $data;
            }

   if(isset($_POST['deleteid'])){
                $deleteid=$_POST['deleteid'];
                $deleteQuery="DELETE FROM users where userid ='$deleteid'";
                mysqli_query($db,$deleteQuery);
            
            }


//get values
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
    $userid = $_POST['id'];
    $query = "SELECT * FROM users WHERE userid = '$userid'";
    if (!$result = mysqli_query($db,$query)) {
        exit(mysqli_error());
    }
    
    $response = array();

    if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
       
            $response = $row;
        }
    }
  //  // agar ek bhi value nai milta hai tho data not found no. of rows 0 hai tho
    else
    {
        $response['status'] = 200;
        $response['message'] = "Data not found!";
    }
   //     PHP has some built-in functions to handle JSON.
// Objects in PHP can be converted into JSON by using the PHP function json_encode(): 

    echo json_encode($response);
}
// ye top wala id jo humhe mil raha hai uska hai jaha wo id check karega sahi hai ya nai agar nai tho invalid req boldega...
else
{
    $response['status'] = 200;
    $response['message'] = "Invalid Request!";
}


//UPDATE TABLE

if(isset($_POST['hidden_user_idupd'])){


    $hidden_user_idupd=$_POST['hidden_user_idupd'];

    $usernameupd=$_POST['usernameupd'];
    $passwordupd=$_POST['passwordupd'];
    $emailupd=$_POST['emailupd'];
    $statusupd=$_POST['statusupd'];
 
  $query="UPDATE users SET username='$usernameupd' ,password='$passwordupd',email='$emailupd',
  status='$statusupd'
  where userid='$hidden_user_idupd'";
  mysqli_query($db,$query);

}

///tsk
if(isset($_POST['hidden_task_idd'])){


    $userid=$_POST['hidden_task_idd'];

    $task=$_POST['task'];
    $deadline=$_POST['deadline'];

 
  $query="INSERT into tasks(user_id,task,deadline) values ('$userid','$task','$deadline')";
  mysqli_query($db,$query);

}
?>



















