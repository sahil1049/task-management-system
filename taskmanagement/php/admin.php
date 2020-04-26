<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'taskmanagement');
if($_SESSION['username']=="admin"){
 


}
else{
    header('location: tasks.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Task Management</title>
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

</head>

<body>



<nav class="navbar fixed-top navbar-dark bg-primary">
<a href="../index.php" class="btn btn-warning">Go back</a>
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
      Add User
    </button>

</nav>
 

  <div >
 
  </div>
  <h1 class="text-primary text-center">Admin Room</h1>
  <h2 class="text-danger ">All Users</h2>
  <br>
  <h3 class="text-success " id="taskassigned" ></h3>
  <div id="products_content"></div>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">User Details</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>

        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Username:</label>
            <input type="text" name="" id="username" class="form-control" placeholder="username">
          </div>

          <div class="form-group">
            <label>password:</label>
            <input type="text" name="" id="password" class="form-control" placeholder="password">
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="text" name="" id="email" class="form-control" placeholder="email">
          </div>
          <div class="form-group">
            <label>Status</label>
            <input type="text" name="" id="status" class="form-control" placeholder="status">
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="addRecord()">Save
            changes</button>
        </div>

      </div>
    </div>



  </div>





  <!-- //update modal -->
  <div class="modal fade" id="update_user_modal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">

          <div class="form-group">
            <label> Username </label>
            <input type="text" name="" id="update_username" placeholder="User Name" class="form-control">
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="text" name="" id="update_password" class="form-control" placeholder="password">
          </div>

          <div class="form-group">
            <label>Email:</label>
            <input type="text" name="" id="update_email" class="form-control" placeholder="email">
          </div>

          <div class="form-group">
            <label>Status:</label>
            <input type="text" name="" id="update_status" class="form-control" placeholder="status">
          </div>
         


        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="UpdateUserDetails()">Update</button>
          <input type="hidden" id="hidden_user_id">
        </div>



      </div>
    </div>
  </div>


  <!-- ASSIGN TASK -->
  <div class="modal fade" id="task_modal">
    <div class="modal-dialog">
      <div class="modal-content">


        <div class="modal-header">
          <h4 class="modal-title">Assign Task</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

      
        <div class="modal-body">

          <div class="form-group">
            <label>Task</label>
            <input type="textbox" name="" id="task" placeholder="task" class="form-control">
          </div>

          <div class="form-group">
            <label>Deadline</label>
            <input type="date" name="" id="deadline" class="form-control" placeholder="deadline date">
          </div>



        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary" onclick="taskAssigned()">Assign</button>
          <input type="hidden" id="hidden_task_id">
        </div>



      </div>
    </div>
  </div>






  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>

  <!-- Latest compiled JavaScript -->

  <script type="text/javascript">
    $(document).ready(function () {
      readRecords();
    });
    function readRecords() {
      var readrecords = "readrecords";
      $.ajax({
        url: "adminbackend.php",
        type: "post",
        data: { readrecords: readrecords },
        success: function (data, status) {
          $('#products_content').html(data);
        }


      })



    }




    function addRecord() {
      var username = $('#username').val();
      var password = $('#password').val();
      var email = $('#email').val();
      var status = $('#status').val();
 
      $.ajax({
        url: 'adminbackend.php',
        type: 'post',
        data: {
          username:username,
          password:password,
          email:email,
          status:status
        },
        success: function (data, status) {
          readRecords();
        }
      })
    }
    function deleteRecord(deleteid) {
      var conf = confirm("are you sure");
      if (conf == true) {
        $.ajax({
          url: "adminbackend.php",
          type: "post",
          data: { deleteid:deleteid },
          success: function (data, status) {
            readRecords();
          }



        })
      }
    }


    function Task(taskid) {
      $('#hidden_task_id').val(taskid);
      $('#task_modal').modal("show");
     

      
    }



    function GetUserDetails(id){
      $('#hidden_user_id').val(id);
      
      $.post("adminbackend.php",
        { id: id },
        function (data, status) {
       
         
          var user = JSON.parse(data);
        
          $('#update_username').val(user.username);
          $('#update_password').val(user.password);
          $('#update_email').val(user.email);
          $('#update_status').val(user.status);
       



        }
      );
      $('#update_user_modal').modal("show");

    }



  function UpdateUserDetails(){
    var usernameupd=$('#update_username').val();
    var passwordupd=$('#update_password').val();
    var emailupd=$('#update_email').val();
    var statusupd=$('#update_status').val();


     var hidden_user_idupd=$('#hidden_user_id').val();
     $.post("adminbackend.php",{
      hidden_user_idupd:hidden_user_idupd,
      usernameupd:usernameupd,
      passwordupd:passwordupd,
      emailupd:emailupd,
      statusupd:statusupd,
    
},
function(data,status){
  $('#update_user_modal').modal("hide");
  readRecords();
}
     );


  }
  function taskAssigned(){
    var task=$('#task').val();
    var deadline=$('#deadline').val();


     var hidden_task_idd=$('#hidden_task_id').val();
     $.post("adminbackend.php",{
      hidden_task_idd:hidden_task_idd,
      task:task,
      deadline:deadline,
    
},
function(data,status){
  $('#task_modal').modal("hide");
  readRecords();
}
     );

     document.getElementById('taskassigned').innerHTML="Task has been assigned";
  }
  </script>
</body>

</html>