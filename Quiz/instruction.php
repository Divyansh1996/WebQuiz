<?php
session_start();
 include 'dbcon.php';
  if(isset($_REQUEST["b1"]))
  {
	  $name=$_REQUEST["name"];
	  $phone=$_REQUEST["phone"];
	  $sql="insert into user(user_name,phone_number)values('".$name."','".$phone."')";
	  $_SESSION['name']=$name;
	  $_SESSION['phone']=$phone;
	 if(mysqli_query($con,$sql))
	 {
        header("Location:quiz1.php");
		
	 }	  
	  
  }
  
?>
<html>
<head>
  <title>Instruction Page</title>
  
	 <link href="https://fonts.googleapis.com/css?family=Alegreya+SC|Merienda|Port+Lligat+Slab|Rye" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  *
  {
	  margin:0;
	  padding:0;
  }
   .nav
   {
	   background:#0a0b137a;
	   width:100%;
	   height:8%;
	   text-align:center;
	   font-size:25px;
	   color:white;
   }
   .div_section
   {
	   margin-top:3%;
	   background-color:#a398e430;
	   padding:18px;
   }
   .i1,.i2
   {
	   height:3%;
	border-radius: 20px;
    padding-top: 13px;
    padding-left: 5px;
    padding-right: 5px;
    padding-bottom: 10px;
   }
   .b11
   {
	   margin-left:43%;
   }
   @media(max-width:600px)
   {
	   .div_section
	   {
		   margin-top:15%;
	   }
	   .i1,.i2
	   {
		   width:95%;
		   margin-top:10px;
		   border-radius: 20px;
           padding-top: 13px;
           padding-left: 5px;
           padding-right: 5px;
           padding-bottom: 10px;
	   }
	   .c2,.c3
	   {
		   margin-top:15px;
	   }
	  .b11{
		  margin-left:30%;
		 
	  }
   }
  </style>
</head>
<body style="background:linear-gradient(#1D2B64,#f8cdda);">
   <div class="nav">
     <div style="margin:0 auto;position:relative;top:15px;font-family: 'Rye', cursive;">Online High School Quiz</div>
   </div>
   <div class="container-fluid">
     <div class="col-md-1">
	 </div>
	 <div class="col-md-10 div_section">
	   <div class="row">
	     <div style="width:100%;height:5%;text-align:center;font-size:25px;font-family: 'Port Lligat Slab', serif;color:white;">Enter Your Details</div>
		</div>
          <form name="form" action="instruction.php" method="POST">		
		 <div class="container-fluid" style="margin-top:2%;padding:10px;">
		 <div class="row">
		 <div class="col-md-5 col-xs-12">
		 <span style="font-size:15px;font-family: 'Port Lligat Slab', serif;color:white;font-size:20px;">Name:</span>
		 <input type="text" placeholder="Input Your Name" name="name" required class="i1" id="i1">
		 </div>
		 <div class="col-md-5 col-xs-12 c2">
		  <span style="font-size:15px;margin-top:10px;font-family: 'Port Lligat Slab', serif;color:white;font-size:20px;">Phone Number:</span>
		 <input type="number" class="i2" id="i2" placeholder="Input Your Number" name="phone" required>
		 </div>
		 <div class="col-md-2 col-xs-12 c3">
		 <span style="font-size:15px;font-family: 'Port Lligat Slab', serif;color:white;font-size:18px;">Time: 600 Seconds</span>
		 </div>
		 </div>
		 </div>
		 <div class="container" style="padding:20px;">
		   <div class="row" style="text-align:center;font-weight:bold;margin-top:3%;font-size:23px;font-family: 'Port Lligat Slab', serif;color:white;">
		     Please read the instructions carefully before attending the quiz.
		   </div>
		   <div class="row" style="margin-top:40px;margin-left:30px;font-size:15px;">
		    <ul style="line-height:40px;font-family: 'Port Lligat Slab', serif;font-size:20px;color:white;">
			  <li>Please complete all answers within given time</li>
			  <li>Write your answer in the answer-box and click on Submit My Answer Button.</li>
			  <li>If the time limit is exceeded,quiz session  will be over automatically.</li>
			  <li>You cannot attend the same quiz more than once</li>
			  <li>Please do not practice any unethical means to complete the quiz.</li>
			</ul>
		   </div>
		   <div class="container">
		    <div class="row">
			 <button type="submit" class="btn btn-warning b11" name="b1" style=" background:#ffe259;color:#794747;font-weight:bold;font-family: 'Port Lligat Slab', serif;font-size:15px;">START MCQ</button>
			</div>
		   </div>
		 </div>
		 </form>
	 </div>
	 <div class="col-md-1">
	 </div>
   </div>
    <script>
      $("#i1").focusout(function(){
		var d=document.getElementById("i1").value;
		var regex = new RegExp("^[a-zA-Z]+$");
		console.log(d.length);
		if(d.length<5)
		{
			alert("Username Should be of atleast length of 5");
			document.getElementById("i1").value="";
		}
		 if(!regex.test(d))
		 {
			 alert("Username should contain only alphabets");
			 document.getElementById("i1").value="";
		 }			 
	  });
	   $("#i2").focusout(function(){
		var d=document.getElementById("i2").value;
		console.log(d.length);
		if(d.length!=10)
		{
			alert("Phone Number should have length of 10");
			document.getElementById("i2").value="";
		}
		if(!$.isNumeric(d))
		{
			alert("Phone Number should consist of numbers only");
			document.getElementById("i2").value="";
		}
		 
	  });
  </script>
</body>

</html>