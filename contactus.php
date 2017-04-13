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
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/base.css">
  <script src="javascript/signjavascript.js"></script>
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
	<div id="boxcontact">
		<div class="innerbox">			
		<div id="maincontact">
			<h2>Contact Us</h2>
			<p>No game postings you were looking for? Whatever it is, send us your comments or suggestions as part of making TechDirect a lively and orderly hub for gamers alike!</p>
         </div>

	<form>
		<h3>Name/Username:</h3>
		<input type="text" name="name" placeholder="username" onblur="testusername()" id="username">
		<br>
		<p id="usernamep"></p>
	</form>
	
	<h3>Topic:</h3>
	<select id="topic_select" onchange="warnselect2('topic_select')">
	<option value="0">Select Topic</option>
	<option value="1">Site Issues</option>
	<option value="2">Add Games</option>
	<option value="3">Media Queries</option>
	<option value="4">Business Queries</option>
	<option value="5">L'ARTketplace</option>
	<option value="6">Report User/s</option>
	<option value="7">Other</option>
	</select>
	<br>
<textarea name="Feedback" cols="70" rows="12">
</textarea>
<form action="send">
	<p><input type ="checkbox" name="confirm" value="PressButton" id="selectrobot" onchange="testselect('selectrobot')">Select this Button to prove that you're not a robot!</p><br>
	<input type="button" value="Submit">
	<input type="button" value="Clear">
</form>
		</div>
</div>
<div id="footer">
<a href="about.php">About Us</a> | 
<a href="contactus.php">Contact Us</a>
<p>&copy; TechDirect 2017</p>
</div>
</div>
</body>
</php>