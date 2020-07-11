<?php
$question_all=array();
include 'dbcon.php';
$data=$_GET['data'];
$sql="select * from question where q_id=".$data;
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{

				 $question_all['id']=$row["q_id"];
				 $question_all['desc']=$row["q_description"];
				 $question_all['op1']=$row["q_option1"];
				 $question_all['op2']=$row["q_option2"];
				 $question_all['op3']=$row["q_option3"];
				 $question_all['op4']=$row["q_option4"];
}
$question=json_encode($question_all);
echo $question;
?>