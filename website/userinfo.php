<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect( "localhost","root","root");
if ($conn) 
{
  echo "Connected successfully";
}
else
{
echo "No connection";
}

mysqli_select_db($conn,'ytdata');

$user=$_POST['user'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$comment=$_POST['comment'];

$query="insert into userinfodata(user,email,mobile,comment)
values('$user','$email','$mobile','$comment')";

mysqli_query($conn,$query);

?>