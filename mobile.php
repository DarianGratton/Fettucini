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
	<title>Mobile</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/base.css">
</head>

<body>

<div id="mainhome">

<!-- sign -->
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
			<a href="pc.html" id="pcdropdown" style="a:hover {background-color: red;">PC</a>
			<a href="xbox.html" id="xboxdropdown">Xbox One</a>
			<a href="ps4.html" id="psdropdown">PS4</a>
			<a href="switch.html" id="switchdropdown">Switch</a>
			<a href="mobile.html" id="mobiledropdown">Mobile</a>
		</div>
	</div>
	</li>
	<li><a href="directory.html">Directory</a></li>
	<li><a href="mainforumpage.html">Community</a></li>
	</ul>
</div>
	
<div id="sysmobile">
	<div>
	<img id="center-image2" src="images/nokia_phone.gif" id="" width= "100" height="150">
	</div>
	<div>
	<table>
		<tr>
			<td class="paddingtable"><h3 style="color: #666699;" class="specs">Release Date: </h3></td>
			<td><p class="mobiletable">1973</p></td>
		</tr>
		<tr class="paddingtable">
			<td class="paddingtable"><h3 style="color: #666699;" class="specs">Developer: </h3></td>
			<td><p class="mobiletable">Various</p></td>
		</tr>
	</table>
	</div>
</div>

<div id="mainmobile">
	<h1 style="color: #666699;">Mobile</h1>
	<p style="color: black;">That will be $4.99 to unlock the descirption.</p>
</div>

<div class="titlemobile">
<h2 style="color: #666699;">Newest Releases</h2>
</div>

<div id="releasemobile">

<a href="games/testwars.html"><img src="images/maxresdefault.jpg" height="100" width="200"><h3 style="color: #666699;">Test Wars</h3></a>
<p style="color: black;">Test Wars makes both a mockery of both the Star Wars and finals, the latter all students will hate to loathe. The game evokes nostalgia and doubt, but I find it to be a handy study tool. It happened to be a computer-science game, so it did help me to relax. HighQ Games announced that will release more subject disciplines within 5 years, so watch out. </p>
<br><hr><br>

<a href="games/hearthpebble.html"><img src="images/game.html"><h3 style="color: #666699;">HearthPebble</h3></a>
<p style="color: black;">After a long day grinding and raiding, you can return back to your inn where you can relax and enjoy some butterbeer whilst playing HearthPebble. HearthPebble is a free card based strategy game developed and produced by SnowStorm Inc.  Using the lore from Planet of Warcraft, cards are pitched against each other in battle.  Similar to collecting cards, you have to buy cards and construct your own decks.  You start off with some basic cards that is available to everyone joining HearthPebble.  As you play, you’re able to buy more packs using gold, an in game currency.  You can also use real world money to purchase extra packs.  Every pack rewards you with five cards.  One of which will be at least a rare.  Cards have different levels of rarity - common, rare, epic, and legendary.  </p>
<br><hr><br>

<a href="game.html"><img src="images/game.html"><h3 style="color: #666699;">Game 3</h3></a>
<p style="color: black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>
</div>

<div class="titlemobile">
<h2 style="color: #666699;">Latest Reviews</h2>
</div>

<div id="reviewmobile">
<a href="game.html"><img src="images/game.html"><h3 style="color: #666699;">Game 1</h3></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>

<a href="game.html"><img src="images/game.html"><h3 style="color: #666699;">Game 2</h3></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>
<a href="game.html"><img src="images/game.html"><h3 style="color: #666699;">Game 3</h3></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>
</div>

<div id="footer">
<a href="about.html">About Us</a> | 
<a href="contactus.html">Contact Us</a>
<p>&copy; TechDirect 2017</p>
</div>
</div>