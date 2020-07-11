<?php
session_start();

               if(!isset($_SESSION['x']))
			  {
				  $_SESSION['x']=1;
			  }
			  if(isset($_GET['data']))
			  {
				  
				  if($_GET['data']=="Submit")
				  {
					 session_destroy();
				  
				  }
				  else if(($_SESSION['x']=="10"))
				  {
					 
					  $_SESSION['x']=1;
				  }
				  else if((isset($_SESSION['x'])) && ($_GET['data']=="1"))
				  {
					   
					  $_SESSION['x']=(int)$_SESSION['x']+1;
					  
				  }
				   else if((isset($_SESSION['x'])) && ($_GET['data']=="2"))
				  {
					
					  $_SESSION['x']=(int)$_SESSION['x']-1;
				  }
				   
			  
			  }
			 
			include 'dbcon.php';
			$question_all=array();
			
			 $sql1="select * from question where q_id='".$_SESSION['x']."'";
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