
<?php

//fetch_user_chat_history.php

include('db.php');

session_start();

echo fetch_user_chat_history($_SESSION['userid'], $_POST['to_user_id'], $connect);

?>