<?php
	require_once('config.php');

	// Connect to server and select database.
	($GLOBALS["___mysqli_ston"] = mysqli_connect(DB_HOST,  DB_USER,  DB_PASSWORD))or die("cannot connect");
	((bool)mysqli_query($GLOBALS["___mysqli_ston"], "USE " . constant('DB_DATABASE')))or die("cannot select DB");
	$tbl_name="topic"; // Table name
	
	$sql="SELECT * FROM $tbl_name, members where members.member_id = topic.member_id ORDER BY id DESC";
	// ORDER BY id DESC is order result by descending
	$result=mysqli_query($GLOBALS["___mysqli_ston"], $sql);
?>

<!doctype html>
<html lang="en">
<head>
  <title>Game Display</title>
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
	<a href="index.html"><img src="../images/logo.png" width="254" height="100" alt="TechDirect"/></a>

	<div id="navsign">
	<a href="login.html"><p>Log In</p></a>
	</div>
	<div id="navsign">
	<a href="signup.html"><p>Sign Up</p></a>
	</div>
	</div>

	<div id="nav">
		<ul>
		<li>
		<div class="dropdown">
			<button class="dropbtn">Consoles</button>
			<div class="dropdown-content">
				<a href="xbox.html">PC</a>
				<a href="xbox.html">Xbox One</a>
				<a href="xbox.html">PS4</a>
				<a href="xbox.html">Switch</a>
				<a href="xbox.html">Mobile</a>
			</div>
		</div>
		</li>
		<li><a href="directory.html">Directory</a></li>
		<li><a href="mainforumpage.html">Community</a></li>
		</ul>
	</div>

<div id="main">
<div id="gamepics">
	<div id="mainimage">
		<img id="imageMain" class="active" src="Images/1.jpg" alt="game pic">
	</div>
	<div id="sideimages">
		<img id="side1" class="side" src="images/1.jpg" alt="game pic" onclick='changeImage("../images/1.jpg");' style="margin-left: -10px;"> 
		<img class="side" src = "images/halo_reach.JPG" alt="game pic" onclick='changeImage("../images/halo_reach.JPG");' style="margin-left: 15px;">  
		<img class="side" src = "Images/1.jpg" alt="game pic" onclick='changeImage("../images/halo_reach.JPG");' style="margin-left: 15px;">
	</div>
	</img>
</div>

<div id ="gameinfo">
  <div class = "gamedescrip">
  <h1>Game Description</h1>
	<p style="color: black;"> "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
	dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
	Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat 
	non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."<p>
	</div>
	
	<div id="sysgame">
	<h3 class="specs" style="padding-top: 15px;">Console:</h3>
	<p class="specs2">[Insert Platform]</p>
	<h3 class="specs">Genre:</h3>
	<p class="specs2">[Insert Genres]</p>
	<h3 class="specs">Developer:</h3>
	<p class="specs2">[Insert Developer]</p>
	<h3 class="specs">Publisher:</h3>
	<p class="specs2">[Insert Publisher]</p>
	<h3 class="specs">Release Date:</h3>
	<p class="specs2">[MM/DD/YYYY]</p>
	</div>
</div>

<div class="titlexbox">
<h2 id="paddingreviews">Latest Reviews</h2>
</div>

<div class="reviewgame2">
<input type='button' value='Write an Review' id='addButton'>
<input type='button' value='Cancel Review' id='removeButton'>
<form action="add_review.php" id="reviewform" method="post">
<div id='TextBoxesGroup'>
	<div id="TextBoxDiv1">
	</div>
</div>
</form>
</div>

<div id="mainmfp">
<table align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC" class="community_forum_table2">
	<tr>
		<td width="6%" align="center" bgcolor="#E6E6E6"><strong>#</strong></td>
		<td width="53%" align="center" bgcolor="#E6E6E6"><strong>Topic</strong></td>
		<td width="7%" align="center" bgcolor="#E6E6E6"><strong>Name</strong></td>
		<td width="6%" align="center" bgcolor="#E6E6E6"><strong>Date/Time</strong></td>
	</tr>

	<?php
		while($rows=mysqli_fetch_array($result)){ // Start looping table row
	?>

	<tr>
		<td bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
		<td bgcolor="#FFFFFF"><a href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
		<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
		<td align="center" bgcolor="#FFFFFF"><?php echo $rows['firstname']." ".$rows['lastname']; ?></td>
	</tr>

	<?php
		// Exit looping and close connection
	}
	((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
	?>
	</table>
</div>

<div id="footer">
<a href="about.html">About Us</a> | 
<a href="contactus.html">Contact Us</a>
<p>&copy; TechDirect 2017</p>
</div>
</div>
</body>
</html>  