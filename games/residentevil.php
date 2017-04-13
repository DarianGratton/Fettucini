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
  <title>Resident Evil</title>
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
<h1>Resident Evil</h1>
<div id="gamepics">
	<div id="mainimage">
		<img id="imageMain" class="active" src="../images/rd1.jpg" alt="game pic">
	</div>
	<div id="sideimages">
		<img id="side1" class="side" src="../images/rd1.jpg" alt="game pic" onclick='changeImage("../images/rd1.jpg");' style="margin-left: -10px;"> 
		<img class="side" src = "../images/rd2.jpg" alt="game pic" onclick='changeImage("../images/rd2.jpg");' style="margin-left: 15px;">  
		<img class="side" src = "../images/rd3.jpg" alt="game pic" onclick='changeImage("../images/rd3.jpg");' style="margin-left: 15px;">
	</div>
	</img>
</div>

<div id ="gameinfo">
  <div class = "gamedescrip">
  <h1>Resident Evil</h1>
	<p style="color: black;"> 
	 A spinoff of the horror classic, Resident Evil hallmarks the gore and stark reality of the medical profession. Well almost,
	 playing first as an intern, the complexity of the cases and the position opportunities open up as the game progresses. 
	 <br><br>
	 The downside is that there wouldn't be any zombies in the morgue or in the emergency room brought about by infection arrivees.
	 Although, you could expect rigor mortis in cadavers or muscular flicks. 
	 <br><br>
	 We are glad that VidaFocus added a VR function to make the experience worthwhile. Whether you are a health professional or not,
	 Resident Evil can give you a shock for the moment. 7.2/10
	</p>
	</div>
	<div id="sysgame">
	<h3 class="specs" style="padding-top: 15px;">Console:</h3>
	<p class="specs2">PC, Mobile</p>
	<h3 class="specs">Genre:</h3>
	<p class="specs2">Action</p>
	<h3 class="specs">Developer:</h3>
	<p class="specs2">VidaFocus</p>
	<h3 class="specs">Publisher:</h3>
	<p class="specs2">VidaFocus</p>
	<h3 class="specs">Release Date:</h3>
	<p class="specs2">April 8, 2015</p>
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
