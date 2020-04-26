<?php

//fetch_user.php

include 'main.php';
include 'db.php';


$data ='<table class="table table-bordered table striped">
              <tr>
              <th>Username</th>
           
              <th>Status</th>
              <th>Action</th>
           
        




              </tr>';
              
              $query = "SELECT * FROM users WHERE username!='".$_SESSION['username']."'";
              $sql = mysqli_query($db,$query);
              if(mysqli_num_rows($sql)>0){
                  $number=1;
                  while($row=mysqli_fetch_array($sql)){
                    $status = '';
                    $current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
                    $current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
                    $user_last_activity = fetch_user_last_activity($row['userid'], $connect);
                    if($user_last_activity > $current_timestamp)
                    {
                     $status = '<button class="btn btn-success" disabled>Online</button>';
                    }
                    else
                    {
                     $status = '<button class="btn btn-danger" disabled>Offline</button>';
                    }
                      $user=$row['username'];
                      $userid=$row['userid'];
                      $data .='<tr>
                      
                      <td>'.$row['username'].' &nbsp;<strong style="color:green">'.count_unseen_message($row['userid'], $_SESSION['userid'], $connect).'</strong> </td>
                      <td>'.$status.'</td>
                      
                      <td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['userid'].'" data-tousername="'.$row['username'].'">Start Chat</button></td>
                      
                      
                      </tr>';
                  
                  }

              }
              $data .='</table>';
              echo $data;


?>

