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
	<title>Xbox One</title>
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
	<img src="Images/platform.placeholder.png" width= "80">
	</div>
	<div>
	<table>
		<tr>
			<td class="paddingtable"><h3 class="specs">Release Date: </h3></td>
			<td><p class="xboxtable">11/22/2013</p></td>
		</tr>
		<tr class="paddingtable">
			<td class="paddingtable"><h3 class="specs">Developer: </h3></td>
			<td><p class="xboxtable">Microsoft</p></td>
		</tr>
	</table>
	</div>
</div>

<div id="mainxbox">
	<h1>Xbox One</h1>
	<p style="color: black;">Welcome to the new decade of gaming and entertainment. Where games push the boundaries of realism and television obeys your every command. Where jumping between music, gaming, movies, and television can happen in an instant (unless theres an update -___-). Let your experience be custom tailored to you, welcome to the all-in-one door stopper, Xbox One.</p>
</div>

<div class="titlexbox">
<h2>Newest Releases</h2>
</div>

<div id="releasexbox">

<a href="games/benbutgame.html"><img src="images/bjbg1.jpg" height="100" width="100"><h3>Benjamin Button: The Game</h3></a>
<p style="color:black;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>

<a href="game.html"><img src="images/game.html"><h3>Game 2</h3></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>
<a href="game.html"><img src="images/game.html"><h3>Game 3</h3></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>
</div>

<div class="titlexbox">
<h2>Latest Reviews</h2>
</div>

<div id="reviewxbox">
<a href="game.html"><img src="images/game.html"><h3>Game 1</h3></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>

<a href="game.html"><img src="images/game.html"><h3>Game 2</h3></a>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<br><hr><br>
<a href="game.html"><img src="images/game.html"><h3>Game 3</h3></a>
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
