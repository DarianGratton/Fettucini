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
  <title>Home</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href = "style/base.css">
</head>
<body>
	
	<div id="mainhome">
	<!-- sign -->
	<div id="header">
	<a href="index.html"><img src="images/logo.png" width="254" height="100" alt="TechDirect"/></a>
	<a href="login.html"><button type="button" class="pointer" >Login</button></a>
	<a href="signup.html"><button type="button" class="pointer">Sign Up</button></a>
	</div>
  
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
  

	<div id="gaming_platformshome">
		<h1>Platforms</h1>
	</div>
	
<div id="platformshome">
    
        <div id="PChome"><a href="PC.html"><img src="images/PCBefore.png" onmouseover="this.src='images/PCHover.png';" onmouseout="this.src='images/PCBefore.png';"></a>
        </div>
        
        <div id="PS4home"><a href="PS4.html"><img src="images/ps4Before.png" onmouseover="this.src='images/ps4Hover.png';" onmouseout="this.src='images/ps4Before.png';"></a>
        </div>
        
        <div id="XBOXhome"><a href="XBOX.html"><img src="images/xboxBefore.png" onmouseover="this.src='images/xboxHover.png';" onmouseout="this.src='images/xboxBefore.png';"></a>
        </div>
        
        <div id="Nintendohome"><a href="Nintendo"><img src="images/switchB.png" onmouseover="this.src='images/switchHover.png';" onmouseout="this.src='images/switchB.png';"></a>
        </div>
        
        <div id="Mobilehome"><a href="Mobile.html"><img src="images/androidBefore.png" onmouseover="this.src='images/androidHover.png';" onmouseout="this.src='images/androidBefore.png';"></a>
        
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
