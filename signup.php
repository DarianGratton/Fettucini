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
  <title>Sign up</title>
  <meta charset="utf-8">
</head>
<link rel="stylesheet" href = "style/base.css">
<body>
<script src="javascript/signjavascript.js"></script>
<div id="mainhome">

	<!-- sign -->
	<div id="header">
	<a href="index.php"><img src="images/logo.png" width="254" height="100" alt="TechDirect"/></a>
	
	<a href="signup.php"><button type="button" class="pointer">Sign Up/Login</button></a>
	</div>
  
	<div id = "nav">
		<ul>
			<li><a href="xbox.php">Consoles</a></li>
			<li><a href="directory.php">Directory</a></li>
			<li><a href="mainforumpage.php">Community</a></li>
		</ul>
	</div>
<div id="errormsg">
	<?php
	if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
		echo '<ul class="err">';
		foreach($_SESSION['ERRMSG_ARR'] as $msg) {
			echo '<li>',$msg,'</li>'; 
		}
		echo '</ul>';
		unset($_SESSION['ERRMSG_ARR']);
	}
	?>
</div>
	<div id="mainsign">
	<!--form1-sign up-->
	<form id="registerForm" name="registerForm" method="post" action="register.php" method="post">
	
	<!--user name-->
	<div id="usersign">
			<div class="usernamesign">
				<label for="login" class="userheading">Username:</label><br>
				<input class="signusername" type="text" name="login" placeholder="username" id="login" onblur="testusername()">
				<p id="loginp"></p>
			</div>
	<!--email-->
			<div>
				<label for="email" class="userheading">Email:</label><br>
				<input id="email" type="text" name="email" placeholder="email" id="email" onchange="warnemail('email')">
					<p id="warnemail"></P>
			</div>
	<!--password--><div id="passwordstyle">
			<div class="passwordsign">
				<label for="password" class="userheading" >Password:</label><br>
				<input class="signusername" type="password" name="password" placeholder="password" id="password" onblur="testpasswords()">
				<p id="passwordp"></p>
				</div>
			</div>
	<!--comfirm password-->
			<div class="passwordsign">
				<label for="cpassword" class="userheading">Confirm Password:</label><br>
				<input class="signusername" type="password" name="cpassword" placeholder="Re-enter password" id="cpassword" onblur="testcomfirm()">
				<p id="warnpass"></p>
			</div>
			
	<!--name-->
		<div class="name">   
			<label for="fname" class="userheading">First Name:</label><br>
            <input type="text" placeholder="First Name" id="fname" name="fname" onblur="testfirstname()"><p id="firstnamep"></p>
            <label for="lname" class="userheading">Last Name:</label><br>
            <input type="text" placeholder="Last Name" id="lname" name="lname" onblur="testlastname()"><p id="lastnamep"></p>
            <br>
        </div>
	<!--select-->
		<div class="select">
			<label for="signupselect" class="userheading">Please select your gender:</label><br>
			<select id="signupselect" class="error" onchange="warnselect('signupselect')">
			<option value="0"></option>
			<option value="Female">Female</option>
			<option value="Male">Male</option>
			<option value="Male">Other</option>
			</select>
			<p id="selectp">You must select a gender</p>
			
	<!--sign button-->
			<div class="signbutton">
				<button id="signbutton" type="submit" height="50";>Sign Up</button>
            </div>
		</div>
	</div>
	</form>	
</div>
<!--form2-login-->
<div id="lowsign">

<form id="loginForm" name="loginForm" method="post" action="login.php">
				<div id="userlogin">
				<div class="usernamesign">
					<label for="login" class="userheading">Username:</label><br>
					<input class="signusername" name="login" type="text" class="textfield" id="login" placeholder="username"><p></p>
				</div>
				<div class="passwordsign">
					<label for="passwo" class="userheading" >Password:</label><br>
					<input class="signusername" name="password" type="password" class="textfield" id="password" placeholder="password"><p></p>
				</div>
				<div id="loginbutton">
				<button type="submit" name="Submit">Login</button><a>
				</div>
				<div class="forgetpassword">
				
				</div>
			</div>
</form>
		
	</div>

	<div id="footer">
		<a href="about.php">About Us</a> | 
		<a href="contactus.php">Contact Us</a>
		<p>&copy; TechDirect 2017</p>
	</div>
</div>
</body>
</php>