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
  <title>HearthPebble</title>
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
<h1>HearthPebble</h1>
<div id="gamepics">
	<div id="mainimage">
		<img id="imageMain" class="active" src="../Images/hearthpebble1.png" alt="game pic">
	</div>
	<div id="sideimages">
		<img id="side1" class="side" src="../images/hp.png" alt="game pic" onclick='changeImage("../images/hp.png");' style="margin-left: -10px;"> 
		<img class="side" src = "../images/hearthpebble2.png" alt="game pic" onclick='changeImage("../images/hearthpebble2.png");' style="margin-left: 15px;">  
		<img class="side" src = "../Images/hearthpebble3.png" alt="game pic" onclick='changeImage("../images/hearthpebble3.png");' style="margin-left: 15px;">
	</div>
	</img>
</div>

<div id ="gameinfo">
  <div class = "gamedescrip">
  <h1>What is HearthPebble</h1>
	<p style="color: black;"> After a long day grinding and raiding, you can return back to your inn where you can relax and enjoy some butterbeer whilst playing HearthPebble. HearthPebble is a free card based strategy game developed and produced by SnowStorm Inc.  Using the lore from Planet of Warcraft, cards are pitched against each other in battle.  Similar to collecting cards, you have to buy cards and construct your own decks.  You start off with some basic cards that is available to everyone joining HearthPebble.  As you play, you’re able to buy more packs using gold, an in game currency.  You can also use real world money to purchase extra packs.  Every pack rewards you with five cards.  One of which will be at least a rare.  Cards have different levels of rarity - common, rare, epic, and legendary.  
	<br><br>
	There are two sets of cards - Standard and Wild.  Standard is the two most recent years of released cards, whereas Wild contains all cards ever released.  There are usually at least three expansions released every year with about a hundred cards each.  With each new release, the meta of the game is ever changing introducing a new feel.  As with the adventures, new ones are released every year with more cards.
	<br><br>
	You can face either the Inn Keeper or other players who are also taking a break from questing or recovering from a long’s day worth of looting.  When facing the Inn Keeper, you are facing the AI, where you can practise your decks against other pre-made decks.  Playing other people is the exact same, except of the variation of decks.  Players are allowed to choose any decks.  Lastly, you can play a single player adventure that must be purchased with either currency.  These adventures follow a theme with multiple bosses that you must play against.  The first time the boss is beat, you are rewarded with new cards.  There are also bonus cards after the completion of each level.
	<br><br>
	In total, there are nine classes to choose from, taken directly from Planet of Warcraft.  Not only does each class have its own hero ability, but also its own set of class cards. The play style of each class is dictated by the hero power and the class cards.  There are different variations amongst the classes, but sometimes, some play style are only limited to a particular class.
<p>
	</div>
	<div id="sysgame">
	<h3 class="specs" style="padding-top: 15px;">Console:</h3>
	<p class="specs2">PC, Mac, iO, Android</p>
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
<a href="about.html">About Us</a> | 
<a href="contactus.html">Contact Us</a>
<p>&copy; TechDirect 2017</p>
</div>
</div>
</body>
</html>  
