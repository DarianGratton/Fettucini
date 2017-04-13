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
  <title>Directory</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href = "style/base.css">
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

<div class ="alphabet">
	<a href="directory.php#a">A</a>
	<a href="directory.php#b">B</a>
	<a href="directory.php#c">C</a>
	<a href="directory.php#d">D</a>
	<a href="directory.php#e">E</a>
	<a href="directory.php#f">F</a>
	<a href="directory.php#g">G</a>
	<a href="directory.php#h">H</a>
	<a href="directory.php#i">I</a>
	<a href="directory.php#j">J</a>
	<a href="directory.php#k">K</a>
	<a href="directory.php#l">L</a>
	<a href="directory.php#m">M</a>
	<a href="directory.php#n">N</a>
	<a href="directory.php#o">O</a>
	<a href="directory.php#p">P</a>
	<a href="directory.php#q">Q</a>
	<a href="directory.php#r">R</a>
	<a href="directory.php#s">S</a>
	<a href="directory.php#t">T</a>
	<a href="directory.php#u">U</a>
	<a href="directory.php#v">V</a>
	<a href="directory.php#w">W</a>
	<a href="directory.php#x">X</a>
	<a href="directory.php#y">Y</a>
	<a href="directory.php#z">Z</a>
</div>

<hr>
<div id="games">

<div id="a">
A
	<ul>
	<li><a href="./games/hearthpebble.php"></a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>

<div id="b">
B <Br>
	<ul>
	<li><a href="./games/benbutgame.php">Benjamin Button: The Game</a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="c">
C <Br>
	<ul>
	<li><a href="./games/hearthpebble.php"></a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="d">
D <Br>
	<ul>
	<li><a href="./games/hearthpebble.php"></a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="e">
E <Br>
	<ul>
	<li><a href="./games/hearthpebble.php"></a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="f">
F <Br>
	<ul>
	<li><a href="./games/hearthpebble.php"></a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="g">
G <Br>
	<ul>
	<li><a href="./games/gtasaopaolo.php">GTA São Paulo</a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="h">
H <Br>
	<ul>
	<li><a href="./games/hearthpebble.php">HearthPebble</a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="i">
I <Br>
	<ul>
	<li><a href="./games/hearthpebble.php"></a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="j">
J <Br>
	<ul>
	<li><a href="./games/hearthpebble.php"></a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="k">
K <Br>
	<ul>
	<li><a href="./games/hearthpebble.php"></a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="l">
L <Br>
	<ul>
	<li><a href="./games/hearthpebble.php"></a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="m">
M <Br>
	<ul>
	<li><a href="./games/mahjong_fun.php">Mahjong Fun</a></li>
	<li><a href="./games/mariogokart.php">Mario Go Kart</a></li>
	</ul>
</div>
<div id="n">
N <Br>
	<ul>
	<li><a href="./games/hearthpebble.php"></a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="o">
O <Br>
	<ul>
	<li><a href="./games/hearthpebble.php"></a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="p">
P <Br>
	<ul>
	<li><a href="./games/warcraft.php">Planet of Warcraft</a></li>
	<li><a href="./games/pyloncraft.php">PylonCraft 2</a></li>
	</ul>
</div>
<div id="q">
Q <Br>
	<ul>
	<li><a href="./games/hearthpebble.php"></a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="r">
R <Br>
	<ul>
	<li><a href="./games/residentevil.php">Resident Evil</a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="s">
S <Br>
	<ul>
	<li><a href="./games/hearthpebble.php"></a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="t">
T <Br>
	<ul>
	<li><a href="./games/testwars.php">Test Wars</a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="u">
U <Br>
	<ul>
	<li><a href="./games/hearthpebble.php"></a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="v">
V <Br>
	<ul>
	<li><a href="./games/hearthpebble.php"></a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="w">
W <Br>
	<ul>
	<li><a href="./games/hearthpebble.php"></a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="x">
X <Br>
	<ul>
	<li><a href="./games/hearthpebble.php"></a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="y">
	Y <Br>
	<ul>
	<li><a href="./games/hearthpebble.php"></a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>
<div id="z">
	Z <Br>
	<ul>
	<li><a href="./games/hearthpebble.php"></a></li>
	<li><a href="./games/hearthpebble.php"></a></li>
	</ul>
</div>


</div>

<div id="footer">
<a href="about.php">About Us</a> | 
<a href="contactus.php">Contact Us</a>
<p>&copy; TechDirect 2017</p>
</div>

 </body>
 </php>