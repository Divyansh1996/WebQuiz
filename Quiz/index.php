<html>
 <head>
   <title>Online Quiz</title>
     <meta charset="utf-8">
	 <link href="https://fonts.googleapis.com/css?family=Anton|Donegal+One|Faster+One|Junge|Lobster" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
  .c1
  {
	  border-radius:7%;
	  background-color:#0f2551cc;
	  width:95%;
	  height:95%;
	  position:absolute;
	  top:3%;
	  left:3%;
  }
  .welcome
  {
	  padding:15px;
	  font-size:30px;
	  text-align:center;
	  background-color:#e81230;
	  border-radius:5%;
	  color:white;
	  font-family: 'Donegal One', serif;
	  font-weight:bold;
	  letter-spacing:5;
	  transform:rotate(45deg);
  }
  .quiz1
  {
	  border-radius:5%;
	  border:7px solid black;
	  width:50%;
	 position:relative;
	 top:80px;
	 padding:10px;
	 font-family: 'Donegal One', serif;
	 background:url(image1.png);
	  
  }
  p
  {
	  color:white;
	  text-align:center;
	  font-family: 'Junge', serif;
	  position:absolute;
	  top:65%;
	  font-size:30px;
  }
  .btn-class
  {
	  color:white;
	  position:absolute;
	  top:90%;
	  left:45%;
	  background-color:orange;
	  font-weight:bold;
	  font-size:3vh;
	  font-family: 'Junge', serif;	
  }
  .high_school
  {
	  color:white;
	  font-size:30px;
	  transform:rotate(-8deg);
	  position:relative;
	  right:30%;
	  font-weight:bold;
  }
  .quiz
  {
	  font-size:80px;
	  font-family: 'Lobster', cursive;
	  font-weight:bold;
	  color:white;
	  letter-spacing:20px;
	  padding:5px;
	  border-radius:5%;
	  background-color:#1000009e;
  }
  .game
  {
	  color:white;
	  font-size:30px;
	  transform:rotate(-8deg);
	  position:relative;
	  left:35%;
	  font-weight:bold;
  }
  @media(max-width:500px)
  {
	  .quiz1
	  {
		  position:relative;
		  top:40px;
		  width:90%;
		  height:35%;
	  }
	  .quiz
	  {
		  font-size:50px;
		  position:relative;
		  top:20px;
	  }
	  .game
	  {
		  position:relative;
		  top:40px;
		  left:30%;
		  font-size:20px;
	  }
	  .high_school
	  {
		  position:relative;
		  right:20%;
		  font-size:20px;
	  }
	  p
	  {
		  position:absolute;
		  top:55%;
		  font-size:20px;
	  }
	  .btn-class
	  {
		  position:absolute;
		  left:32%;
	  }
  }
</style>
 </head>
 <body style="background:linear-gradient(blue,black);">
     <div class="container c1">
		    <center><span class="welcome">WELCOME TO</span></center>
		    <center><div class="quiz1">
			  <div class="high_school">HIGH SCHOOL</div> 
			  <span class="quiz">QUIZ</span><br>
			  <div class="game">GAME</div>
			 </div>
			 <p>
			   High School Quiz Game is the online companion to the exciting and educational game on WCBH.PLay Quick and exciting trives of General Knowledge Questions,Post Your Scores and become a Quiz Champion.
			 </p>
			 </center>
			 <a href="instruction.php"><button class="btn btn-warning btn-class">START QUIZ</button></a>
	 </div>
 </body>
</html>