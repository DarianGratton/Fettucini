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
  
	<div id = "nav">
		<ul>
			<li><a href="consoles.html">Consoles</a></li>
			<li><a href="directory.html">Directory</a></li>
			<li><a href="mainforumpage.html">Community</a></li>
		</ul>
	</div>
  	<div id = "introhome">
		<h1>Who We Are</h1>
			<p>TechDirect, your one stop shop for all information from tech to more tech.  We showcase the latest games and tell you all about it!  Not only can you read about the latest descriptions but can also read about the latest reviews!  These reviews are from your truly and would be from other users too, but we do not know how to code that so you're stuck with us at the moment! Maybe in term two!</p>
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
        
        <div id="Nintendohome"><a href="switch.html"><img src="images/switchB.png" onmouseover="this.src='images/switchHover.png';" onmouseout="this.src='images/switchB.png';"></a>
        </div>
        
        <div id="Mobilehome"><a href="Mobile.html"><img src="images/androidBefore.png" onmouseover="this.src='images/androidHover.png';" onmouseout="this.src='images/androidBefore.png';"></a>
        
    </div>
	
	<div id="hometable">
		<div id="tableright">
		<table class = "tablehead">
			<caption class="table_headinghome">Featured Reviews</caption>
			<thead>
			<tr>
				<th class="gamehome">Game</th>
				<th class="titlehome">Title/Review</th> 
				<th class="creatorhome">Creator</th>
			</tr>
			</thead>
		</table>
		<div class="scrolltablewidth">
			<table class = "tablewidth">
				<tr>
					<td class="lefthome"><div><a href="games/testwars.html"><img src="images/maxresdefault.jpg" alt="maxresfault"></a></div></td>
					<td class="centerhome"><div><a href="games/testwars.html">Test Wars</a> - Tests in War</div></td>
					<td class="righthome">Kevin Oane</td>
				</tr>
				<tr>
					<td class="lefthome"><a href="games/pyloncraft.html"><img src="images/pc2.png" alt="pyloncraft" height="50" width ="50"></a></td>
					<td class="centerhome"><a href="games/pyloncraft.html">Pyloncraft</a> - A popular successor to MineralCraft: Brood Wars, SnowStorm Inc, has finally released PylonCraft 2. Just like its predecessor, you are able to choose...</td>
					<td class="righthome">Vincent Lam</td>
				</tr>
				<tr>
					<td class="lefthome"><img src="images/hp.png" alt="hp"></td>
					<td class="centerhome"><a href="games/hearthpebble.html">HearthPebble</a> - After a long day grinding and raiding, you can return back to your inn where you can relax and enjoy some butterbeer whilst playing HearthPebble.</td>
					<td class="righthome">Vincent Lam</td>
				</tr>
					<tr>
					<td class="lefthome"><img src="images/halo_reach.jpg" alt="Rayman"></td>
					<td class="centerhome"><a href="games/legendofhelga.com">Legend of Helga</a> - A increible twist on Nintendo's Legend of Korok, it includes NO Koroks.</td>
					<td class="righthome">Bertram Nocon</td>
				</tr>
			</table>
		</div></div>
</div>
	<div id="footer">
	<a href="about.html">About Us</a> | 
	<a href="contactus.html">Contact Us</a>
	<p>&copy; TechDirect 2017</p>
	</div>
	</div>
</body>
</html>
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
  
	<div id = "nav">
		<ul>
			<li><a href="consoles.html">Consoles</a></li>
			<li><a href="directory.html">Directory</a></li>
			<li><a href="mainforumpage.html">Community</a></li>
		</ul>
	</div>
  	<div id = "introhome">
		<h1>Who We Are</h1>
			<p>TechDirect, your one stop shop for all information from tech to more tech.  We showcase the latest games and tell you all about it!  Not only can you read about the latest descriptions but can also read about the latest reviews!  These reviews are from your truly and would be from other users too, but we do not know how to code that so you're stuck with us at the moment! Maybe in term two!</p>
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
        
        <div id="Nintendohome"><a href="switch.html"><img src="images/switchB.png" onmouseover="this.src='images/switchHover.png';" onmouseout="this.src='images/switchB.png';"></a>
        </div>
        
        <div id="Mobilehome"><a href="Mobile.html"><img src="images/androidBefore.png" onmouseover="this.src='images/androidHover.png';" onmouseout="this.src='images/androidBefore.png';"></a>
        
    </div>
	
	<div id="hometable">
		<div id="tableright">
		<table class = "tablehead">
			<caption class="table_headinghome">Featured Reviews</caption>
			<thead>
			<tr>
				<th class="gamehome">Game</th>
				<th class="titlehome">Title/Review</th> 
				<th class="creatorhome">Creator</th>
			</tr>
			</thead>
		</table>
		<div class="scrolltablewidth">
			<table class = "tablewidth">
				<tr>
					<td class="lefthome"><div><a href="games/testwars.html"><img src="images/maxresdefault.jpg" alt="maxresfault"></a></div></td>
					<td class="centerhome"><div><a href="games/testwars.html">Test Wars</a> - Tests in War</div></td>
					<td class="righthome">Kevin Oane</td>
				</tr>
				<tr>
					<td class="lefthome"><a href="games/pyloncraft.html"><img src="images/pc2.png" alt="pyloncraft" height="50" width ="50"></a></td>
					<td class="centerhome"><a href="games/pyloncraft.html">Pyloncraft</a> - A popular successor to MineralCraft: Brood Wars, SnowStorm Inc, has finally released PylonCraft 2. Just like its predecessor, you are able to choose...</td>
					<td class="righthome">Vincent Lam</td>
				</tr>
				<tr>
					<td class="lefthome"><img src="images/hp.png" alt="hp"></td>
					<td class="centerhome"><a href="games/hearthpebble.html">HearthPebble</a> - After a long day grinding and raiding, you can return back to your inn where you can relax and enjoy some butterbeer whilst playing HearthPebble.</td>
					<td class="righthome">Vincent Lam</td>
				</tr>
					<tr>
					<td class="lefthome"><img src="images/halo_reach.jpg" alt="Rayman"></td>
					<td class="centerhome"><a href="games/legendofhelga.com">Legend of Helga</a> - A increible twist on Nintendo's Legend of Korok, it includes NO Koroks.</td>
					<td class="righthome">Bertram Nocon</td>
				</tr>
			</table>
		</div></div>
</div>
	<div id="footer">
	<a href="about.html">About Us</a> | 
	<a href="contactus.html">Contact Us</a>
	<p>&copy; TechDirect 2017</p>
	</div>
	</div>
</body>
</html>
