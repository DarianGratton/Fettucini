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
  <title>Benjamin Button: The Game</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href = "../style/base.css">
</head>
<script type="text/javascript" src="../javascript/jquery-3.2.0.js"></script>
<script type="text/javascript">
function changeImage(a) {
        document.getElementById("imageMain").src=a;
    }
$(document).ready(function(){

    var counter = 2;

    $("#addButton").click(function () {

	if(counter > 2){
            return false;
	}
	var newTextBoxDiv = $(document.createElement('div'))
		.attr("id", 'TextBoxDiv' + counter);

	newTextBoxDiv.after().html('<h2>Game Title</h2>' + '<textarea name="review" form="reviewform"></textarea>' + counter + '" id="textbox' + counter + '" value="" >' + '<input type="submit" id="submitreview" value="Submit">' + '<input type="reset" name="Submit2" value="Reset">');

	newTextBoxDiv.appendTo("#TextBoxesGroup");


	counter++;
     });

     $("#removeButton").click(function () {
	if(counter==1){
          return false;
       }

	counter--;

        $("#TextBoxDiv" + counter).remove();

     });
  });
</script>
<body>

<div id="mainhome">

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
			<a href="../pc.php" id="pcdropdown">PC</a>
			<a href="../xbox.php" id="xboxdropdown">Xbox One</a>
			<a href="../ps4.php" id="psdropdown">PS4</a>
			<a href="../switch.php" id="switchdropdown">Switch</a>
			<a href="../mobile.php" id="mobiledropdown">Mobile</a>
		</div>
	</div>
	</li>
	<li><a href="../directory.php">Directory</a></li>
	<li><a href="../mainforumpage.php">Community</a></li>
	</ul>
</div>

<div id="main">
<h1>Benjamin Button: The Game</h1>
<div id="gamepics">
	<div id="mainimage">
		<img id="imageMain" class="active" src="../Images/bjbg1.jpg" alt="game pic">
	</div>
	<div id="sideimages">
		<img id="side1" class="side" src="../images/bjbg1.jpg" alt="game pic" onclick='changeImage("../images/bjbg2.jpg");' style="margin-left: -10px;"> 
		<img class="side" src = "../images/bjbg2.jpg" alt="game pic" onclick='changeImage("../images/bjbg2.jpg");' style="margin-left: 15px;">  
		<img class="side" src = "../images/bjbg3.jpg" alt="game pic" onclick='changeImage("../images/bjbg3.jpg");' style="margin-left: 15px;">
	</div>
	</img>
</div>

<div id ="gameinfo">
  <div class = "gamedescrip">
  <h1>Benjamin Button: The Game</h1>
	<p style="color: black;"> 
	The success of the Benjamin Button movie paved the production of its game counterpart. Production started in 2013 but Young & Old put the project hold for six months due to financial problems. Released in Christmas, the game covers the less-featured scenes in the film.  Playing as Benjamin Button himself, you live life in reverse.  You do missions on scenes of him traveling around the world in his mid-years, fighting the U-boat in the World War, and even dancing as an old toddler on congregation nights! I was looking forward for extra missions involving the soldier of the clocksmith. 
	There is a chance you’ll give up the game due to its length, but nonetheless,
	movie fans can expect those love scenes and opportunities being with Ben’s daughter. I say it’s a 8/10.
	</p>
	</div>
	<div id="sysgame">
	<h3 class="specs" style="padding-top: 15px;">Console:</h3>
	<p class="specs2">Xbox, PS4</p>
	<h3 class="specs">Genre:</h3>
	<p class="specs2">Action</p>
	<h3 class="specs">Developer:</h3>
	<p class="specs2">Young and Old</p>
	<h3 class="specs">Publisher:</h3>
	<p class="specs2">Young and Old.</p>
	<h3 class="specs">Release Date:</h3>
	<p class="specs2">December 1, 2015</p>
	</div>
	
	<div id="gamereview">
		<h2 id="paddingreviews">Review</h2>
		<p id="gamereviewp">Its a game. </p>
	</div>
</div>

<div id="footer">
<a href="about.php">About Us</a> | 
<a href="contactus.php">Contact Us</a>
<p>&copy; TechDirect 2017</p>
</div>
</div>
</body>
</html>  
