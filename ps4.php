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
	<title>PS4</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/base.css">
	<style>
	h1 { 
	color: #006FC6; }
	.titleps h2 { 
	color: #006FC6; }
	.titleps h2 {
		color: #006FC6;
	}
	h3 { 
	color: #006FC6; }

	.sysps table{
		background-color:#023189;
	}
	</style>
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
			<a href="pc.php" id="pcdropdown">PC</a>
			<a href="xbox.php" id="xboxdropdown">Xbox One</a>
			<a href="ps4.php" id="psdropdown">PS4</a>
			<a href="switch.php" id="switchdropdown">Switch</a>
			<a href="mobile.php" id="mobiledropdown">Mobile</a>
		</div>
	</div>
	</li>
	<li><a href="directory.php">Directory</a></li>
	<li><a href="mainforumpage.php">Community</a></li>
	</ul>
</div>
	
<div id="sysps">
	<div>
	<img src="images/ps4logo.jpg" width= "225" height="125">
	</div>
	<div>
	<table>
		<tr>
			<td class="paddingtable"><h3 class="specs">Release Date: </h3></td>
			<td><p class="pstable">11/29/2013</p></td>
		</tr>
		<tr class="paddingtable">
			<td class="paddingtable"><h3 class="specs">Developer: </h3></td>
			<td><p class="pstable">Sony</p></td>
		</tr>
	</table>
	</div>
</div>

<div id="mainps">
	<h1>PS4</h1>
	<p style="color: black;">We heard you liked games, that's why when we heard the backlash that ps One was a tv box, we gave you only games. Come join our rich upper class games as we deliver some of the best games for you; while also being the same company bring you the emoji movie. We're quality and PS4 delivers an breathtaking and unique gaming experience.</p>
</div>

<div class="titleps">
<h2>Newest Releases</h2>
</div>

<div id="releaseps">

<a href="games/benbutgame.php"><img src="images/bjbg1.jpg" height="100" width="100"><h3>Benjamin Button: The Game</h3></a>
<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>

<a href="game.php"><img src="images/game.php"><h3>Game 2</h3></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>
<a href="game.php"><img src="images/game.php"><h3>Game 3</h3></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>
</div>

<div class="titleps">
<h2>Latest Reviews</h2>
</div>

<div id="reviewps">
<a href="game.php"><img src="images/game.php"><h3>Game 1</h3></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>

<a href="game.php"><img src="images/game.php"><h3>Game 2</h3></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>
<a href="game.php"><img src="images/game.php"><h3>Game 3</h3></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>
</div>

<div id="footer">
<a href="about.php">About Us</a> | 
<a href="contactus.php">Contact Us</a>
<p>&copy; TechDirect 2017</p>
</div>
</div>