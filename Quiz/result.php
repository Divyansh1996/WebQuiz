<html>
<head>
	<title>Result Page</title>
	  <link rel="stylesheet" href="css/vroom.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/plugins/CSSPlugin.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/easing/EasePack.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.15.0/TweenLite.min.js"></script>
	<script type="text/javascript" src="js/vroom.js"></script>
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  function load()
  {
	history.pushState(null, null, "http://localhost/Quiz/result.php");
	window.addEventListener('popstate', function () {
        history.pushState(null, null, "http://localhost/Quiz/result.php");
    });
  }
  </script>
  <style type="text/css">
	.button1
	{
		padding:10px;
		position:absolute;
		top:85%;
		right:55%;
		font-size:18px;
	}
	.button2
	{
		padding:10px;
		position:absolute;
		top:85%;
		right:40%;
		font-size:18px;
	}
	 .header
	 {
		 width:100%;
		 height:10%;
		 color:white;
		 font-family: 'Arvo', serif;
		 display:flex;
		 font-weight:bold;
		 letter-spacing:2px;
		 font-size:25px;
	 }
	 tr
	 {
		 visibility:hidden;
		 height:70px;
		 width:90px;
	 }
	 td
	 {
		 text-align:center;
		  padding:5px 10px 5px 10px;
	 }
  </style>
</head>
<body style="background:black;" onload="load()">
	<div class="container-fluid" style=" background:#00000059;">
	  <div class="row header">
		  <div style="margin:auto;">HIGH SCHOOL QUIZ</div>
	  </div>
  </div>
  <div class="container-fluid">
	<div class="row header" style="position:absolute;top:15%;right:2%;">
	  <div style="margin:auto;" id="result1">Your Result Will be Displayed Here</div>
	</div>
  </div>
  <div class="container-fluid">
	<div class="row">
		<table style="color:white;border-spacing: 15px;border-collapse: collapse;position:absolute;top:20%;">
			<tr id="11">
			   <td style="background-color:green;color:white;border-radius:50%;">Question Number</td>
			   <td style="background-color:orange;color:white;border-radius:50%;">Your Answer</td>
			   <td style="background-color:#ff0039;color:white;border-radius:50%;">Correct Answer</td>
			</tr>
			<tr style='height:15px;'>
			  </tr>
			<?php
			 include 'dbcon.php';
             $sql1="select * from user_question where user_id=(select max(user_id) from user_question) and (q_id>=1 and q_id<=5) order by q_id";
			 $result1=mysqli_query($con,$sql1);
			 while($row1=mysqli_fetch_array($result1))
			 {
				 if($row1['points']==0)
				 {
					 echo "<tr style='background-color:red;' id='".$row1['q_id']."'>";
					 echo "<td>".$row1['q_id']."</td>";
					 echo "<td>".$row1['user_answer']."</td>";
					 echo "<td>".$row1['correct_answer']."</td>";
					 echo "</tr>";
					 echo "<tr style='height:15px;'>";
			         echo "</tr>";
				 }
				 else
				 {
					 echo "<tr style='background-color:green;'  id='".$row1['q_id']."'>";
					 echo "<td>".$row1['q_id']."</td>";
					 echo "<td>".$row1['user_answer']."</td>";
					 echo "<td>".$row1['correct_answer']."</td>"; 
					 echo "</tr>";
					 echo "<tr style='height:15px;'>";
			         echo "</tr>";
				 }
			 }
			 for($i=1;$i<=5;$i++)
			 {	 
			 $sql3="select * from user_question where user_id=(select max(user_id) from user_question) and (q_id='".$i."')";
			 $result3=mysqli_query($con,$sql3);
				 if(mysqli_num_rows($result3)==0)
				 {
					 $sql4="select * from question where q_id='".$i."'";
					 $result4=mysqli_query($con,$sql4);
					 while($row4=mysqli_fetch_array($result4))
					 {
					 echo "<tr style='background-color:red;' id='".$row4['q_id']."'>";
					 echo "<td>".$row4['q_id']."</td>";
					 echo "<td>Not Attempted</td>";
					 echo "<td>".$row4['q_answer']."</td>";
					 echo "</tr>";
					 echo "<tr style='height:15px;'>";
			         echo "</tr>";
					 }
				 } 
			 }
			?>
		</table>
		<table style="color:white;border-spacing: 15px;border-collapse: collapse;position:absolute;top:20%;left:68%;">
			<tr id="22">
			   <td style="background-color:green;color:white;border-radius:50%;">Question Number</td>
			   <td style="background-color:orange;color:white;border-radius:50%;">Your Answer</td>
			   <td style="background-color:#ff0039;color:white;border-radius:50%;">Correct Answer</td>
			</tr>
			<tr style='height:15px;'>
			  </tr>
			<?php
			 include 'dbcon.php';
             $sql1="select * from user_question where user_id=(select max(user_id) from user_question) and (q_id>=6 and q_id<=10) order by q_id";
			 $result1=mysqli_query($con,$sql1);
			 while($row1=mysqli_fetch_array($result1))
			 {
				 if($row1['points']==0)
				 {
					 echo "<tr style='background-color:red;'  id='".$row1['q_id']."'>";
					 echo "<td>".$row1['q_id']."</td>";
					 echo "<td>".$row1['user_answer']."</td>";
					 echo "<td>".$row1['correct_answer']."</td>";
					 echo "</tr>";
					 echo "<tr style='height:15px;'>";
			         echo "</tr>";
				 }
				 else
				 {
					 echo "<tr style='background-color:green;'  id='".$row1['q_id']."'>";
					 echo "<td>".$row1['q_id']."</td>";
					 echo "<td>".$row1['user_answer']."</td>";
					 echo "<td>".$row1['correct_answer']."</td>"; 
					 echo "</tr>";
					 echo "<tr style='height:15px;'>";
			         echo "</tr>";
				 }
			 }
			  for($i=6;$i<=10;$i++)
			 {	 
			 $sql3="select * from user_question where user_id=(select max(user_id) from user_question) and (q_id='".$i."')";
			 $result3=mysqli_query($con,$sql3);
				 if(mysqli_num_rows($result3)==0)
				 {
					 $sql4="select * from question where q_id='".$i."'";
					 $result4=mysqli_query($con,$sql4);
					 while($row4=mysqli_fetch_array($result4))
					 {
					 echo "<tr style='background-color:red;' id='".$row4['q_id']."'>";
					 echo "<td>".$row4['q_id']."</td>";
					 echo "<td>Not Attempted</td>";
					 echo "<td>".$row4['q_answer']."</td>";
					 echo "</tr>";
					 echo "<tr style='height:15px;'>";
			         echo "</tr>";
					 }
				 } 
			 }
			?>
		</table>
	</div>
  </div>
	<div id="gauge"  style="position:absolute;left:33%;top:30%;">
	  <div id="circle"></div>
	  <div id="numbers"></div>
	  <div id="mi-km">Your Score</div>
	  <div id="needle"></div>
    </div>
	<div id="left" style="visibility:hidden;">
	  <div>
		<label for="miles">Miles:</label>
		<input type="text" name="miles" id="miles">
	  </div>
	  <div>
		<label for="kilometers">Kilometers:</label>
		<input type="text" name="kilometers" id="kilometers">
	  </div>
       <p id="errmsg"></p>
    </div>
	 <button type="button" class="btn btn-warning button1" name="result" id="result" onclick="result();">See Result</button>
	 <button type="button" class="btn btn-warning button2" name="summary" id="summary">Summary</button>
	 <script type="text/javascript">
		function result()
		{
			 var xmlhttp=new XMLHttpRequest;
			  xmlhttp.onreadystatechange=function()
	        {
			  if(xmlhttp.status==200 && xmlhttp.readyState==4)
			  {   			  
				   var a=JSON.parse(this.responseText);
				    document.getElementById("kilometers").value=a['sum']*16;
					document.getElementById("numbers").value=a['sum']*10;
						jQuery(function($) {
							$('#kilometers').keydown();
							$('#kilometers').keypress();
							$('#kilometers').keyup();
							$('#kilometers').blur();
							$('#result1').fadeOut(1000);
							var kilo = $("#numbers").val();
							console.log(kilo);
							if(parseInt(kilo)<40)
							{	
								$('#result1').css('color','#ff0039');
								$('#result1').html("Sorry,You Need to Improve");
							}
							else if(parseInt(kilo)==50||parseInt(kilo)==60||parseInt(kilo)==40)
							{	
								$('#result1').css('color','#eea236');
								$('#result1').html("You Have Done a Pretty Good Job");
							}
							else
							{
								$('#result1').css('color','#11f71a');
								$('#result1').html("You Have Marvelous Knowledge");
							}
							$('#result1').fadeIn(1000);
						 });
						 document.getElementById("mi-km").value="Your Score";
			  }
	      };
		  xmlhttp.open('GET','server_result.php');
		  xmlhttp.send();
		}
		$("#summary").click(function(){
			$("tr").css('visibility','visible');
			$("#11").fadeOut();
			$("#1").fadeOut();
			$("#2").fadeOut();
			$("#3").fadeOut();
			$("#4").fadeOut();
			$("#5").fadeOut();
			$("#22").fadeOut();
			$("#6").fadeOut();
			$("#7").fadeOut();
			$("#8").fadeOut();
			$("#9").fadeOut();
			$("#10").fadeOut();
			$("#11").fadeIn(1000);
			$("#1").fadeIn(6000);
			$("#2").fadeIn(3000);
			$("#3").fadeIn(4000);
			$("#4").fadeIn(5000);
			$("#5").fadeIn(6000);
			$("#22").fadeIn(7000);
			$("#6").fadeIn(8000);
			$("#7").fadeIn(9000);
			$("#8").fadeIn(10000);
			$("#9").fadeIn(11000);
			$("#10").fadeIn(12000);
		});
		
	 </script>
	 <script>
	   
	 </script>
</body>
</html>