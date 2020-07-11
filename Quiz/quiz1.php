<?php
session_start();
include 'dbcon.php';
$sql2="select * from user where user_name='".$_SESSION['name']."' and phone_number='".$_SESSION['phone']."'";
$result2=mysqli_query($con,$sql2);
while($row2=mysqli_fetch_array($result2))
{
	$_SESSION['id']=$row2['user_id'];
}
?>
<script>
var fullscreen_data=1;
</script>
<html>
 <head>
  <title>Question Page</title>
  <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Vollkorn" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <style type="text/css">
      *
	  {
		  margin:0;
		  padding:0;
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
	 .section1
	 {
		 background:#ffe259;
		 border-radius:3%;
		 color:#794747;
		 padding:8px;
		 position:absolute;
		 top:17%;
		 left:5%;
		 width:auto;
		 font-weight:bold;
	 }
	 .section2
	 {
	position: absolute;
    top: 17%;
    left: 42%;
	 }
	 .section3
	 {
		 background:#ffe259;
		 border-radius:3%;
		 color:#794747;
		 padding:10px;
		 position:absolute;
		 top:17%;
		 right:7%;
		 width:auto;
		 font-weight:bold;
	 }
	 .section4
	 {
		 background:#00000059;
		 color:white;
		padding:10px;
		font-family: 'Arvo', serif;
		
	 }
	 .container{
		 width:100%;
		 height:auto;
	 }
	 .options
	 {
		 border:1px solid white;
		 border-radius:10%;
		 padding:10px;
		 color:white;
		 background-color: rgba(240, 248, 255, 0);
		 transition-property:background-color;
		 transition-duration:2s;
	 }
	 .options:hover
	 {
		 background-color:#ffe259 !important;
		 color:white;
		 cursor:hand;
	 }
	 #option11
	 {
		 transition-property:background-color;
		 transition-duration:1s; 
	 }
	  $option11:hover
	 {
		 background-color:orange;
		 color:white;
		 cursor:hand;
	 }
	 .question-tag
	 {
		 background:#ffe259;
		 font-weight:bold;
		 color:#794747;
		 padding:5px;
		 width:15%;
		 padding:5px;
		 border-radius:10%;
	 }
	 .change-btn
	 {
		  background:#ffe259;
		 color:#794747;
		 font-weight:bold;
	 }
	 label>input[type=radio]
	 {
		 visibility:hidden;
	 }
   </style>
   <script>
		 var duration=60*10;
		 var id=setInterval(function(){
			 var minutes=parseInt(duration/60,10);
             var seconds=parseInt(duration%60,10);
             if(minutes<10)
             {
				document.getElementById("min").innerHTML="0"+minutes; 
			 }
             else
			 {
				 document.getElementById("min").innerHTML=minutes;
			 }
           if(seconds<10)
		   {
			   document.getElementById("seconds").innerHTML="0"+seconds;
		   }
           else
		   {
			   document.getElementById("seconds").innerHTML=seconds;
		   }
           if(--duration<0)
           {
			   document.getElementById("timeup").innerHTML="Your Time is expired";
			   clearInterval(id);
			   alert("Thank You for attending our quiz.Now You will be moved directly to our Result page");
			   window.location.href="result.php";
		   }			   
		 },1000);
		 
	 function option_select(option)
	 {
		 var q_no=document.getElementById("question_tag").innerHTML;
		 var select="option"+option;
		 var select1="option"+option+option;
		 var option_name=document.getElementById(select).innerHTML;
		 
		 var http= new XMLHttpRequest;
		 http.onreadystatechange=function()
		 {
			if(http.status==200 && http.readyState==4)
			{
				var a=JSON.parse(this.responseText);
				console.log("Hi  there");
				if(a['select']=="false")
				{
				  document.getElementById(select1).style.backgroundColor="red";
                  document.getElementById("option"+a['correct_id']+a['correct_id']).style.backgroundColor="green";				  
				}
				else
				{
					document.getElementById(select1).style.backgroundColor="green";
				}
	
				
			}				
		 }
		 http.open("GET","server_option.php?q_no="+q_no+"&user_select="+option_name,true);
		 http.send();
	 }
   </script>
 </head>
 <body style="background:linear-gradient(#1D2B64,#f8cdda);" onload="update_page();" onclick="launchIntoFullscreen(document.documentElement)">
 <label id="tag-id"></label>
 <div class="container-fluid" style=" background:#00000059;">
  <div class="row header">
      <div style="margin:auto;">HIGH SCHOOL QUIZ</div>
  </div>
  <div class="row">
    <div class="col-md-2 section1">
	  Welcome <?php echo $_SESSION["name"]?> 
	</div>
	<div class="col-md-7 section2">
	  	     <button class="btn btn-warning change-btn" name="next" value="Next" id="Next1" onclick="voice()">Click Here to Hear Voice</button>
			 <input type="hidden" name="hidden1" id="hidden1" />
			 <audio id="audio1" src="anushka_voice.3gpp" ></audio>
			 <audio id="audio2" src="aamir_voice.3gpp" ></audio>
	</div>
	<div class="col-md-3 section3" id="timeup">
	   Time Remaining: <span id="min">10</span> Minutes <span id="seconds">00 </span>Seconds
	</div>
	</div>
	
  </div>
  <div class="container" style="margin-top:9%;">
      <div class="row">
	    <div class="col-md-2">
		</div>
		<div class="col-md-8">
		 <center><div class="question-tag">
		      Question <label id="question_tag"></label> of 10 
		  </div></center>
		</div>
		<div class="col-md-2">
		</div>
	  </div>
    <div class="row">
	    <div class="col-md-2">
		</div>
		<div class="col-md-8 section4">
		   <center style="font-size:20px;" id="question_description"></center>
		   <div class="container" style="margin-top:5%;">
		      <center><div class="row">
			    <div class="col-md-5 options" onclick="option_select(1)" id="option11">
				   <label><input type="radio" name="option1" value="v1"><label id="option1"></label></label>
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-5 options" onclick="option_select(2)" id="option22">
				   <label><input type="radio" name="option2" value="v2"><label id="option2"></label></label>
				</div>
			  </div>
			  <div class="row" style="margin-top:5%;">
				 <div class="col-md-5 options" onclick="option_select(3)" id="option33">
				   <label><input type="radio" name="option1" value="v1"><label id="option3"></label></label>
				</div>
				<div class="col-md-1">
				</div>
				<div class="col-md-5 options" onclick="option_select(4)" id="option44">
				   <label><input type="radio" name="option2" value="v2"><label id="option4"></label></label>
				</div>
			  </div>
			  </center>
		   </div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
  </div>
  <script type="text/javascript">
  function launchIntoFullscreen(element) {
	if(element.requestFullscreen) {
	element.requestFullscreen();
	} else if(element.mozRequestFullScreen) {
	element.mozRequestFullScreen();
	} else if(element.webkitRequestFullscreen) {
	element.webkitRequestFullscreen();
	} else if(element.msRequestFullscreen) {
	element.msRequestFullscreen();
	}
}
    function update_page()
	{
	  document.getElementById("option11").style.backgroundColor="#f0f8ff00";
	  document.getElementById("option22").style.backgroundColor="#f0f8ff00";
	  document.getElementById("option33").style.backgroundColor="#f0f8ff00";
	  document.getElementById("option44").style.backgroundColor="#f0f8ff00";
		var http=new XMLHttpRequest;
		http.onreadystatechange=function()
		{
			if(http.readyState==4 && http.status==200)
			{
			
			   var a=JSON.parse(this.responseText);
			   document.getElementById("question_description").innerHTML=a['desc'];
			   document.getElementById("option1").innerHTML=a['op1'];
			   document.getElementById("option2").innerHTML=a['op2'];
			   document.getElementById("option3").innerHTML=a['op3'];
			   document.getElementById("option4").innerHTML=a['op4'];
			   document.getElementById("question_tag").innerHTML=a['id'];
			   console.log(a['id']+"\n");
			   if(a['id']==5||a['id']==8)
			   {
				   document.getElementById("Next1").style.display="inline";
				   document.getElementById("hidden1").value=a['id'];
			   }
			  else
			  {
				 document.getElementById("Next1").style.display="none"; 
			  }
			}
		};
		http.open("GET","first_server.php",true);
		http.send();
	}
  </script>
 <div class="container-fluid" style="margin-top:4%;">
   <div class="row">
      <center>
	     <button class="btn btn-warning change-btn" name="next" value="Next" id="Next">Next</button>
		 <button class="btn btn-warning change-btn" name="previous" value="Previous" id="Previous">Previous</button>
		 <a href="result.php"><button class="btn btn-warning change-btn" name="submit" value="Submit Exam" id="Submit">Submit Exam </button></a>
	  </center>
   </div>
 </div>
  <div class="container-fluid">
    <div class="row">
	  <center>
	    <ul class="pagination">
		  <li onclick="button_link(1)"><a href="#">1</a></li>
		  <li onclick="button_link(2)"><a href="#">2</a></li>
		  <li onclick="button_link(3)"><a href="#">3</a></li>
		  <li onclick="button_link(4)"><a href="#">4</a></li>
		  <li onclick="button_link(5)"><a href="#">5</a></li>
		  <li onclick="button_link(6)"><a href="#">6</a></li>
		  <li onclick="button_link(7)"><a href="#">7</a></li>
		  <li onclick="button_link(8)"><a href="#">8</a></li>
		  <li onclick="button_link(9)"><a href="#">9</a></li>
		  <li onclick="button_link(10)"><a href="#">10</a></li>
		</ul>
	  </center>
	</div>
   </div>
<script type="text/javascript">
   if (document.addEventListener)
{
    document.addEventListener('webkitfullscreenchange', exitHandler, false);
    document.addEventListener('mozfullscreenchange', exitHandler, false);
    document.addEventListener('fullscreenchange', exitHandler, false);
    document.addEventListener('MSFullscreenChange', exitHandler, false);
}

function exitHandler()
{
    if (document.webkitIsFullScreen === false)
    {
        ///fire your event
		if(fullscreen_data==1)
	    {		
		alert("You have exited the FullScreen Mode,One More time and you will not be able to continue the test");
		--fullscreen_data;
		}
		else if(fullscreen_data==0)
		{
			alert("You are disqualified from giving the test");
			window.location.href = 'http://localhost/Quiz/';
			var xmlhttp=new XMLHttpRequest;
			 xmlhttp.onreadystatechange=function()
	        {
				
				  if(xmlhttp.status==200 && xmlhttp.readyState==4)
				  {
					 console.log("user disqualified");  
				  }
		    };
	  
		  xmlhttp.open('POST','server_user_disqualify.php');
		  xmlhttp.send();
		}
    }
}  
  document.getElementById("Next").addEventListener("click",Next_Question);
  document.getElementById("Previous").addEventListener("click",Previous_Question);
  document.getElementById("Submit").addEventListener("click",Submit_Question);
  function Next_Question()
  {
	  document.getElementById("option11").style.backgroundColor="#f0f8ff00";
	  document.getElementById("option22").style.backgroundColor="#f0f8ff00";
	  document.getElementById("option33").style.backgroundColor="#f0f8ff00";
	  document.getElementById("option44").style.backgroundColor="#f0f8ff00";
	  var xmlhttp=new XMLHttpRequest;
	  var data=1;
	  xmlhttp.onreadystatechange=function()
	  {
		  console.log("statechange");
		  if(xmlhttp.status==200 && xmlhttp.readyState==4)
		  {
			  
			   var a=JSON.parse(this.responseText);
			   document.getElementById("question_description").innerHTML=a['desc'];
			   document.getElementById("option1").innerHTML=a['op1'];
			   document.getElementById("option2").innerHTML=a['op2'];
			   document.getElementById("option3").innerHTML=a['op3'];
			   document.getElementById("option4").innerHTML=a['op4'];
			   document.getElementById("question_tag").innerHTML=a['id'];
			  console.log(a['id']+"\n");
			   if(a['id']==5||a['id']==8)
			   {
				   document.getElementById("Next1").style.display="inline";
				    document.getElementById("hidden1").value=a['id'];
			   }
			  else
			  {
				 document.getElementById("Next1").style.display="none"; 
			  }
			   
			  
		     }
		  };
	  
	  xmlhttp.open('GET','server.php?data='+data);
	  xmlhttp.send();
	}  
  
  function Previous_Question()
  {
	  document.getElementById("option11").style.backgroundColor="#f0f8ff00";
	  document.getElementById("option22").style.backgroundColor="#f0f8ff00";
	  document.getElementById("option33").style.backgroundColor="#f0f8ff00";
	  document.getElementById("option44").style.backgroundColor="#f0f8ff00";
	var xmlhttp=new XMLHttpRequest;
	  var data=2;
	  xmlhttp.onreadystatechange=function()
	  {
		  if(xmlhttp.status==200 && xmlhttp.readyState==4)
		  {
			     			  
			   var a=JSON.parse(this.responseText);
			   document.getElementById("question_description").innerHTML=a['desc'];
			   document.getElementById("option1").innerHTML=a['op1'];
			   document.getElementById("option2").innerHTML=a['op2'];
			   document.getElementById("option3").innerHTML=a['op3'];
			   document.getElementById("option4").innerHTML=a['op4'];
			   document.getElementById("question_tag").innerHTML=a['id'];
			  console.log(a['id']+"\n");
			   if(a['id']=="5"||a['id']=="8")
			   {
				   document.getElementById("Next1").style.display="inline";
				   document.getElementById("hidden1").value=a['id'];
			   }
			  else
			  {
				 document.getElementById("Next1").style.display="none"; 
			  }
			  
		  }
	  };
	  xmlhttp.open('GET','server.php?data='+data);
	  xmlhttp.send();
	  
  }
  function Submit_Question()
  {
	  console.log("Submit");
	  var xmlhttp=new XMLHttpRequest;
	  var data=Submit;
	  xmlhttp.onreadystatechange=function()
	  {
		  if(xmlhttp.status==200 && xmlhttp.readyState==4)
		  {
			   var a=JSON.parse(this.responseText);
			   console.log(a['session']);
		  }
	  };
	  xmlhttp.open('GET','session_destroy.php');
	  xmlhttp.send();
	  //location.reload();*/
  }  
  function button_link(data)
  {
	  document.getElementById("option11").style.backgroundColor="#f0f8ff00";
	  document.getElementById("option22").style.backgroundColor="#f0f8ff00";
	  document.getElementById("option33").style.backgroundColor="#f0f8ff00";
	  document.getElementById("option44").style.backgroundColor="#f0f8ff00";
	  var xmlhttp=new XMLHttpRequest;
	  console.log(data);
	  xmlhttp.onreadystatechange=function()
	  {
		  if(xmlhttp.status==200 && xmlhttp.readyState==4)
		  {
			     			  
			   var a=JSON.parse(this.responseText);
			   document.getElementById("question_description").innerHTML=a['desc'];
			   document.getElementById("option1").innerHTML=a['op1'];
			   document.getElementById("option2").innerHTML=a['op2'];
			   document.getElementById("option3").innerHTML=a['op3'];
			   document.getElementById("option4").innerHTML=a['op4'];
			   document.getElementById("question_tag").innerHTML=a['id'];
			  console.log(a['id']+"\n");
			   if(a['id']=="5"||a['id']=="8")
			   {
				   document.getElementById("Next1").style.display="inline";
				   document.getElementById("hidden1").value=a['id'];
			   }
			  else
			  {
				 document.getElementById("Next1").style.display="none"; 
			  }
		  }
	  };
	  xmlhttp.open('GET','server_button_link.php?data='+data);
	  xmlhttp.send();
  }
   function voice()
   {
	   var voice_id=document.getElementById("hidden1").value;
	   if(voice_id=="5")
	   {
		   var audio = document.getElementById("audio2");
		   if(!audio.paused && audio.duration>0)
		   {
			   document.getElementById("Next1").innerHTML="Click Here to Hear the voice";
			   audio.pause();
		   }
		   else
		   {
			 audio.play();
			 document.getElementById("Next1").innerHTML="Click Here to Pause the voice";
		   }
	   }
	   else if(voice_id=="8")
	   {
	        var audio = document.getElementById("audio1");
		   if(!audio.paused && audio.duration>0)
		   {
			   document.getElementById("Next1").innerHTML="Click Here to Hear the voice";
			   audio.pause();
		   }
		   else
		   {
			 audio.play();
			 document.getElementById("Next1").innerHTML="Click Here to Pause the voice";
		   }   
	   }
   }
</script>    
 </body>
</html>