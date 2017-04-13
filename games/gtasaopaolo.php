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
  <title>São Paulo</title>
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
<h1>GTA São Paulo</h1>
<div id="gamepics">
	<div id="mainimage">
		<img id="imageMain" class="active" src="../Images/gtasp1.jpg" alt="game pic">
	</div>
	<div id="sideimages">
		<img id="side1" class="side" src="../images/gtasp1.jpg" alt="game pic" onclick='changeImage("../images/gtasp1.jpg");' style="margin-left: -10px;"> 
		<img class="side" src = "../images/gtasp2.jpg" alt="game pic" onclick='changeImage("../images/gtasp2.jpg");' style="margin-left: 15px;">  
		<img class="side" src = "../images/gtasp3.jpg" alt="game pic" onclick='changeImage("../images/gtasp3.jpg");' style="margin-left: 15px;">
	</div>
	</img>
</div>

<div id ="gameinfo">
  <div class = "gamedescrip">
  <h1>GTA São Paulo</h1>
	<p style="color: black;"> 
	Ola! Tudo bem! Cade os Brasileiros?!?! Esso um jogo sobre nossa cidade, São Paulo. 
	Homesick or not, the game is nearly similar the actual game. The game map covers at least half of the city. 
	<br>
	That actually, is an achievement for Blues Games, whose GTA V map covered a quarter of the Los Angeles county.
	<br><br>
	To see the significance of this achievement, São Paulo is the LARGEST city in the Southern hemisphere (Sorry Aussies and Argentinians!). kkkk. 
	Several new features have been added, the particular being phenomenal daily variations. 
	For example, expect rush hours early morning and on the afternoon. Get wonderful perks midday when price are low. 
	Sounds promising, but there are risks like being mugged late in the night. 
	At least half of the buildings aren’t accessible by the player, although there are people coming in and out, but nonetheless, 
	GTA São Paulo is a welcome surprise; it is the first Southern Hemispherical city featured in Blues Games’ GTA line. Let me know how it goes. 
	As Brazilians say during departure, tchau!
	</p>
	</div>
	<div id="sysgame">
	<h3 class="specs" style="padding-top: 15px;">Console:</h3>
	<p class="specs2">Xbox, PS4, PC</p>
	<h3 class="specs">Genre:</h3>
	<p class="specs2">Action</p>
	<h3 class="specs">Developer:</h3>
	<p class="specs2">Blues Games</p>
	<h3 class="specs">Publisher:</h3>
	<p class="specs2">BlueCore.</p>
	<h3 class="specs">Release Date:</h3>
	<p class="specs2">May 12, 2016</p>
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
