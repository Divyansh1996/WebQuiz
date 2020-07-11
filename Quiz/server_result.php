<?php
include 'dbcon.php';
 $sql="select sum(points) as sum from user_question where user_id=(select max(user_id) from user_question)";
 $result=mysqli_query($con,$sql);
 $question_all=array();
 while($row=mysqli_fetch_array($result))
 {
	 $question_all['sum']=$row['sum'];
 }
 $question=json_encode($question_all);
 echo $question;
?>