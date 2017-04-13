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
	<title>pc</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style/base.css">
		<style>
	h1 { 
	color: #2F4F4F; 
}
	.titlepc h2 { 
	color: #D3D3D3; 
}

	h3 { 
	color: #2F4F4F; }

	.syspc table{
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
	
<div id="syspc">
	<div>
	<img src="Images/platform.placeholder.png" width= "80">
	</div>
	<div>
	<table>
		<tr>
			<td class="paddingtable"><h3 class="specs">Release Date: </h3></td>
			<td><p class="pctable">1975</p></td>
		</tr>
		<tr class="paddingtable">
			<td class="paddingtable"><h3 class="specs">Developer: </h3></td>
			<td><p class="pctable">Various Companies</p></td>
		</tr>
	</table>
	</div>
</div>

<div id="mainpc">
	<h1>Personal Computer</h1>
	<p style="color: black;">With a familiar Windows experience, fast start-up times, and live tiles, giving you informartion at a glance, you're ready for doing with Windows 10. Oh yeah and there is Mac too. Don't game on a Mac. Just don't.</p>
</div>

<div class="titlepc">
<h2>Newest Releases</h2>
</div>

<div id="releasepc">

<a href="games/pyloncraft.html"><img src="images/pc2.png" height="100" width="100"><h3>PylonCraft 2</h3></a>
<p style="color: black;">A popular successor to MineralCraft: Brood Wars, SnowStorm Inc, has finally released PylonCraft 2. Just like its predecessor, you are able to choose from three different factions, Zerg, Terran, and Protoss.  Set in the far future, humans have become the Terrans.  Upon having the ability for interstellar travel, the Terrans have started exploring the universe.  It was until they encountered two alien races - Zerg and Protoss. The Zerg is an alien race based on a hive mind biologically advanced arthropods.  The Protoss are advanced humanoid species with advanced technologies who have psionic energies.  Being the three most dominant species in the galaxy, the three species fight each to prevent their own species from going extinct.</p>
<br><hr><br>

<a href="games/warcraft.html"><img src="images/pow.png" height="100" width="100"><h3>Planet of Warcraft</h3></a>
<p style="color: black;">Planet of Warcraft, also known as POW, is an Massively Multiplayer Online Role Playing Game.  You start as a character entering the world of Blazeroth.  Not only can you customize what your character looks like, but also what race, class and faction they belong to.  You can choose one of two factions - Alliance or the Horde.  Each will have its own cities and backstory.  Then you can choose what race your character will be and each race is limited to certain classes.  This give you limited choices, but they make sense lorewise.  You then start the game in your starting city with respect to your race and faction.</p>
<br><hr><br>
<a href="games/residentevil.html"><img src="images/rd1.jpg" height="100" width="100"><h3>Resident Evil</h3></a>
<p style="color:black;">A spinoff of the horror classic, Resident Evil hallmarks the gore and stark reality of the medical profession. Well almost, playing first as an intern, the complexity of the cases and the position opportunities open up as the game progresses. </p>
<br><hr><br>
</div>

<div class="titlepc">
<h2>Latest Reviews</h2>
</div>

<div id="reviewpc">
<a href="games/hearthpebble.html"><img src="images/hp.png" height="100" width="100"><h3>HearthPebble</h3></a>
<p style="color:black;">There are two sets of cards - Standard and Wild.  Standard is the two most recent years of released cards, whereas Wild contains all cards ever released.  There are usually at least three expansions released every year with about a hundred cards each.  With each new release, the meta of the game is ever changing introducing a new feel.  As with the adventures, new ones are released every year with more cards.
	<br><br></p>
<br><hr><br>


</div>

<div id="footer">
<a href="about.html">About Us</a> | 
<a href="contactus.html">Contact Us</a>
<p>&copy; TechDirect 2017</p>
</div>
</div>
