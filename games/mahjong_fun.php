<?php
	session_start();
?>
<?php
	include 'functions.php';
	require_once('config.php');
	session_start();

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB, error: ".((is_object($GLOBALS["___mysqli_ston"])) ? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ? $___mysqli_res : false)));
	$tbl_name="topic"; // Table name
?>
<!doctype html>
<html lang="en">
<head>
  <title>Mahjong Fun</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href = "../style/base.css">
</head>
<script type="text/javascript" src="../javascript/jquery-3.2.0.js"></script>
<script type="text/javascript">
function changeImage(a) {
        document.getElementById("imageMain").src=a;
    }
$(document).ready(function(){

    var counter = 2;

    $("#addButton").click(function () {

	if(counter > 2){
            return false;
	}
	var newTextBoxDiv = $(document.createElement('div'))
		.attr("id", 'TextBoxDiv' + counter);

	newTextBoxDiv.after().html('<h2>Game Title</h2>' + '<textarea name="review" form="reviewform"></textarea>' + counter + '" id="textbox' + counter + '" value="" >' + '<input type="submit" id="submitreview" value="Submit">' + '<input type="reset" name="Submit2" value="Reset">');

	newTextBoxDiv.appendTo("#TextBoxesGroup");


	counter++;
     });

     $("#removeButton").click(function () {
	if(counter==1){
          return false;
       }

	counter--;

        $("#TextBoxDiv" + counter).remove();

     });
  });
</script>
<body>

<div id="mainhome">

	<div id="header">
	<a href="index.php"><img src="images/logo.png" width="254" height="100" alt="TechDirect"/></a>
<?php
		if (isLoggedIn()){
			echo '<a href="logout.php"><button type="button" class="pointer">Logout</button></a>';
			echo '<div id="welcome">',"welcome",'<br>',$_SESSION['SESS_FIRST_NAME'],'</div>';	
		} else {
			echo '<a href="signup.php"><button type="button" class="pointer">Sign Up/Login</button></a>';
		}
?>
	</div>

<div id="nav">
	<ul>
	<li>
	<div class="dropdown">
		<button class="dropbtn">Consoles</button>
		<div class="dropdown-content">
			<a href="../pc.html" id="pcdropdown">PC</a>
			<a href="../xbox.html" id="xboxdropdown">Xbox One</a>
			<a href="../ps4.html" id="psdropdown">PS4</a>
			<a href="../switch.html" id="switchdropdown">Switch</a>
			<a href="../mobile.html" id="mobiledropdown">Mobile</a>
		</div>
	</div>
	</li>
	<li><a href="../directory.html">Directory</a></li>
	<li><a href="../mainforumpage.html">Community</a></li>
	</ul>
</div>

<div id="main">
<h1>Mahjong Fun</h1>
<div id="gamepics">
	<div id="mainimage">
		<img id="imageMain" class="active" src="../Images/mahjongfun1.jpg" alt="game pic">
	</div>
	<div id="sideimages">
		<img id="side1" class="side" src="../images/mahjongfun1.jpg" alt="game pic" onclick='changeImage("../images/mahjongfun1.jpg");' style="margin-left: -10px;"> 
		<img class="side" src = "../images/mahjongfun2.jpg" alt="game pic" onclick='changeImage("../images/mahjongfun2.jpg");' style="margin-left: 15px;">  
		<img class="side" src = "../images/mahjongfun3.jpg" alt="game pic" onclick='changeImage("../images/mahjongfun3.jpg");' style="margin-left: 15px;">
	</div>
	</img>
</div>

<div id ="gameinfo">
  <div class = "gamedescrip">
  <h1>Mahjong Fun</h1>
	<p style="color: black;"> 
	Mahjong is the newest mobile game that has hit the market.  It gives you the opportunity to play on the go.  
	Whether you are waiting for the bus to come, on the toilet, or your date to show up if at all, you can quickly join a game and play.  
	What’s great is that when that date DOES show up, you can quickly stow it away and resume at a later time.  
	It wont physically lock you down for hours at a time, although if you become addicted, that’s another story.  
	<br>
    What sets this apart from its competitors is that this is that you play for real money.  
	You can choose different tables to play at.  Each table will have different buy ins.  
	What this means for the average user is that they are able to either play casually and hope to win some spare cash.  
	But for the more serious players, you can compete with other great mahjong players to see who is the mahjong king.
	</p>
	</div>
	<div id="sysgame">
	<h3 class="specs" style="padding-top: 15px;">Console:</h3>
	<p class="specs2">Android, iOS</p>
	<h3 class="specs">Genre:</h3>
	<p class="specs2">Fantasy</p>
	<h3 class="specs">Developer:</h3>
	<p class="specs2">GambleandPoker</p>
	<h3 class="specs">Publisher:</h3>
	<p class="specs2">Red Dragon.</p>
	<h3 class="specs">Release Date:</h3>
	<p class="specs2">March 17, 2016</p>
	</div>
	
	<div id="gamereview">
		<h2 id="paddingreviews">Review</h2>
		<p id="gamereviewp">Its a game. </p>
	</div>
</div>

<div id="footer">
<a href="about.html">About Us</a> | 
<a href="contactus.html">Contact Us</a>
<p>&copy; TechDirect 2017</p>
</div>
</div>
</body>
</html>  
