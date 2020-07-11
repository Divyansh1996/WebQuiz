<?php
include 'dbcon.php';
$sql="select max(user_id) from user";
$result=mysqli_query($con,$sql);
$user=array();
while($row=mysqli_fetch_array($result))
{
  $user['id']=$row['max(user_id)'];	
}
$sql2="delete from user_question where user_id=".$user['id'];
$result2=mysqli_query($con,$sql2);
$sql1="delete from user where user_id=".$user['id'];
$result1=mysqli_query($con,$sql1);

?>