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
  <title>PylonCraft 2</title>
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
			<a href="../pc.php" id="pcdropdown">PC</a>
			<a href="../xbox.php" id="xboxdropdown">Xbox One</a>
			<a href="../ps4.php" id="psdropdown">PS4</a>
			<a href="../switch.php" id="switchdropdown">Switch</a>
			<a href="../mobile.php" id="mobiledropdown">Mobile</a>
		</div>
	</div>
	</li>
	<li><a href="../directory.php">Directory</a></li>
	<li><a href="../mainforumpage.php">Community</a></li>
	</ul>
</div>

<div id="main">
<h1>PylonCraft 2</h1>
<div id="gamepics">
	<div id="mainimage">
		<img id="imageMain" class="active" src="../images/pc2.png" alt="game pic">
	</div>
	<div id="sideimages">
		<img id="side1" class="side" src="../images/pcss1.png" alt="game pic" onclick='changeImage("../images/pcss1.png");' style="margin-left: -10px;"> 
		<img class="side" src = "../images/pcss2.png" alt="game pic" onclick='changeImage("../images/pcss2.png");' style="margin-left: 15px;">  
		<img class="side" src = "../Images/pcss3.png" alt="game pic" onclick='changeImage("../images/pcss3.png");' style="margin-left: 15px;">
	</div>
	</img>
</div>

<div id ="gameinfo">
  <div class = "gamedescrip">
  <h1>What is PylonCraft 2</h1>
	<p style="color: black;">A popular successor to MineralCraft: Brood Wars, SnowStorm Inc, has finally released PylonCraft 2. Just like its predecessor, you are able to choose from three different factions, Zerg, Terran, and Protoss.  Set in the far future, humans have become the Terrans.  Upon having the ability for interstellar travel, the Terrans have started exploring the universe.  It was until they encountered two alien races - Zerg and Protoss. The Zerg is an alien race based on a hive mind biologically advanced arthropods.  The Protoss are advanced humanoid species with advanced technologies who have psionic energies.  Being the three most dominant species in the galaxy, the three species fight each to prevent their own species from going extinct.
	<br><br>
PylonCraft 2 is a real turn strategy game, where everything is done in realtime while trying to beat the opponents.  Each race has its types of units and thus, its own play style.  Zergs focus on speed and swarming the opponent with the sheer amount of units, Protoss focus on power but not as many units, and Terrans are a balance of both.  You begin with a few workers and from there, you try to amass an army to wipe out the opponent.  There are different strategies in building order against each faction and what units.  Not only do you have to take into account what the other player is building, but also the terrain and positioning will make a big difference when fighting against the other opponent.  Everything down to the timing is crucial in PylonCraft.
	<br><br>
There are different modes that you can play in.  There is a single player story line where you find out what caused the war against all three species and how it turns out.  There are also fun modes where people have made custom rules and maps where people can play in.  With these custom modes, the possibilities are endless.  Lastly would be competitive mode where you play against other people following the rules of SnowStorm Inc.  There is 1v1, 2v2, 3v3, and 4v4.  The more people there, the more chaotic the battles will be.  

<p>
	</div>
	<div id="sysgame">
	<h3 class="specs" style="padding-top: 15px;">Console:</h3>
	<p class="specs2">PC, Mac</p>
	<h3 class="specs">Genre:</h3>
	<p class="specs2">Fantasy</p>
	<h3 class="specs">Developer:</h3>
	<p class="specs2">SnowStorm Inc.</p>
	<h3 class="specs">Publisher:</h3>
	<p class="specs2">SnowStorm Inc.</p>
	<h3 class="specs">Release Date:</h3>
	<p class="specs2">March 11, 2014</p>
	</div>
	
	<div id="gamereview">
		<h2 id="paddingreviews">Review</h2>
		<p id="gamereviewp">Its a game. </p>
	</div>
</div>

<div id="footer">
<a href="about.php">About Us</a> | 
<a href="contactus.php">Contact Us</a>
<p>&copy; TechDirect 2017</p>
</div>
</div>
</body>
</html>  
