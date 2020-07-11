<?php
include 'dbcon.php';
			$question_all=array();
			
			 $sql1="select * from question where q_id=1";
			 $result1=mysqli_query($con,$sql1);
			 while($row=mysqli_fetch_array($result1))
			 {
			
				 $question_all['id']=$row["q_id"];
				 $question_all['desc']=$row["q_description"];
				 $question_all['op1']=$row["q_option1"];
				 $question_all['op2']=$row["q_option2"];
				 $question_all['op3']=$row["q_option3"];
				 $question_all['op4']=$row["q_option4"];
			 }
         $questions=json_encode($question_all);
         echo $questions;		 
?>