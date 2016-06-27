<?php
$db_name= "pdoddapa";
$mysql_username = "pdoddapa";
$mysql_password = "password123";
$server_name = "mysql.eecs.ku.edu";
$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
if($conn)
{
  //echo "Connection Success";
}
else {
  //echo "connection not success";
}

 ?>
