<?php
$db_name= "pdoddapa";
$mysql_username = "pdoddapa";
$mysql_password = "password123";
$server_name = "mysql.eecs.ku.edu";

$sql = "select * from wb_users where id=5;";

//$sql = "select * from wb_users;";

$conn = mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);

$result = mysqli_query($conn,$sql);

$response = array();

while($row = mysqli_fetch_array($result))
{

	array_push($response,array("first_name"=>$row[0],"last_name"=>$row[1],"email"=>$row[2]));


}

echo json_encode(array("server_response"=>$response));

mysqli_close($conn);


?>
