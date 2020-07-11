<?php
session_start();
$user_select=$_REQUEST['user_select'];
$q_no=$_REQUEST['q_no'];
include 'dbcon.php';
$sql="select * from question where q_id=".$q_no;
$result=mysqli_query($con,$sql);

while($row=mysqli_fetch_array($result))
{
	$correct_option=$row["q_answer"];
	$correct_id=$row["q_answer_id"];
}
if($correct_option==$user_select)
{
	$select="true";
	$sql2="select * from user_question where user_id='".$_SESSION['id']."' and q_id='".$q_no."'";
	$result2=mysqli_query($con,$sql2);
	if(mysqli_num_rows($result2)==0)
	{	
		$sql1="insert into user_question values('".$_SESSION['id']."','".$q_no."','".$user_select."','".$correct_option."',1)";
		$result1=mysqli_query($con,$sql1);
	}
	else
	{
		 $sql3="update user_question set q_id='".$q_no."',user_answer='".$user_select."',correct_answer='".$correct_option."',points=1 where user_id='".$_SESSION['id']."' and q_id='".$q_no."'";
	     $result3=mysqli_query($con,$sql3);
	}
}
else
{
	$select="false";
	$sql2="select * from user_question where user_id='".$_SESSION['id']."' and q_id='".$q_no."'";
	$result2=mysqli_query($con,$sql2);
	if(mysqli_num_rows($result2)==0)
	{	
		$sql1="insert into user_question values('".$_SESSION['id']."','".$q_no."','".$user_select."','".$correct_option."',0)";
		$result1=mysqli_query($con,$sql1);
	}
	else
	{
		 $sql3="update user_question set q_id='".$q_no."',user_answer='".$user_select."',correct_answer='".$correct_option."',points=0 where user_id='".$_SESSION['id']."' and q_id='".$q_no."'";
	     $result3=mysqli_query($con,$sql3);
	}
}

$question=array();
$question['correct_option']=$correct_option;
$question['user_select']=$user_select;
$question['select']=$select;
$question['correct_id']=$correct_id;
$q=json_encode($question);
echo $q;

?>