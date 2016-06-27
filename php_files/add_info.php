<?php

require "conn.php";
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];

$sql_query = "insert into wb_users(first_name,last_name,email) values('$first_name','$last_name','$email');";
$sql_query2 = "insert into Users values('$first_name');";
$mysql_qry = "select * from Users where user_id like '$user_name';";
$result = mysqli_query($conn,$sql_query);
if(mysqli_num_rows($result) > 0)
{

  $row = mysqli_fetch_assoc($result);
  $namef=$row['first_name'];
  echo $namef;

}
else
{
	echo "Winner";
}

?>
