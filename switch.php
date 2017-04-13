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
	<title>Nintendo Switch</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/base.css">
</head>
<script>
	
</script>
<body>

<div id="mainhome">

<!-- sign -->
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
			<a href="pc.html" id="pcdropdown">PC</a>
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
	
<div id="sysxbox">
	<div>
	<img id="center-image" src="Images/nintendo_switch_logo.png" width="150" height="150">
	</div>
	<div>
	<table>
		<tr>
			<td class="paddingtable"><h3 style="color: #FF0000;" class="specs">Release Date: </h3></td>
			<td><p class="xboxtable">03/03/2017</p></td>
		</tr>
		<tr class="paddingtable">
			<td class="paddingtable"><h3 style="color: #FF0000;" class="specs">Developer: </h3></td>
			<td><p class="xboxtable">Nintendo</p></td>
		</tr>
	</table>
	</div>
</div>

<div id="mainxbox">
	<h1 style="color: #FF0000;">Nintendo Switch</h1>
	<p style="color: black;">Nintendos back at it again, making you hyped for a product that will probably be an disappointment. I mean none of the game are cheap despite their content and the only note worthy one is zelda. Hopefully this unemployed bum will be proven wrong and I can buy this console with more then 10 games. </p>
</div>

<div class="titlexbox">
<h2 style="color: #FF0000;">Newest Releases</h2>
</div>

<div id="releasexbox">

<a href="games/mariogokart.html"><img src="images/mario1.png" height="100" width="100"><h3 style="color: #FF0000;">Mario Go Kart</h3></a>
<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>

<a href="game.html"><img src="images/game.html"><h3 style="color: #FF0000;">Game 2</h3></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>
<a href="game.html"><img src="images/game.html"><h3 style="color: #FF0000;">Game 3</h3></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>
</div>

<div class="titlexbox">
<h2 style="color: #FF0000;">Latest Reviews</h2>
</div>

<div id="reviewxbox">
<a href="game.html"><img src="images/game.html"><h3 style="color: #FF0000;">Game 1</h3></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>

<a href="game.html"><img src="images/game.html"><h3 style="color: #FF0000;">Game 2</h3></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>
<a href="game.html"><img src="images/game.html"><h3 style="color: #FF0000;">Game 3</h3></a>
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
