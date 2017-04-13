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
  <title>Community</title>
  <meta charset="utf-8">
</head>
<link rel="stylesheet" href = "../style/base.css">
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
			<a href="pc.html" id="pcdropdown" style="a:hover {background-color: red;">PC</a>
			<a href="xbox.html" id="xboxdropdown">Xbox One</a>
			<a href="ps4.html" id="psdropdown">PS4</a>
			<a href="switch.html" id="switchdropdown">Switch</a>
			<a href="mobile.html" id="mobiledropdown">Mobile</a>
		</div>
	</div>
	</li>
	<li><a href="directory.html">Directory</a></li>
	<li><a href="./forum/forum.php">Community</a></li>
	</ul>
</div>
  
<div id = "Community_forums">
	<h1>Community</h1>
</div>
	
 <table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="6%" align="center" bgcolor="#22412F"><strong>#</strong></td>
<td width="53%" align="center" bgcolor="#22412F"><strong>Topic</strong></td>
<td width="6%" align="center" bgcolor="#22412F"><strong>Date/Time</strong></td>
<td width="7%" align="center" bgcolor="#22412F"><strong>Name</strong></td>
</tr>

<?php
while($rows=mysqli_fetch_array($result)){ // Start looping table row
?>

<tr>
<td bgcolor="#607469"><?php echo $rows['id']; ?></td>
<td bgcolor="#607469"><a style="color: black;"href="view_topic.php?id=<?php echo $rows['id']; ?>"><?php echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#607469"><?php echo $rows['datetime']; ?></td>
<td align="center" bgcolor="#607469"><?php echo $rows['firstname']." ".$rows['lastname']; ?></td>

</tr>

<?php
// Exit looping and close connection
}
((is_null($___mysqli_res = mysqli_close($GLOBALS["___mysqli_ston"]))) ? false : $___mysqli_res);
?>
<tr>
<td colspan="5" align="right" bgcolor="#22412F"><a style="color: black" href="add_topic_form.php"><strong>Create New Topic</strong> </a></td>
</tr>
</table>
	
	<div id="footer">
	<a href="about.html">About Us</a> | 
	<a href="contactus.html">Contact Us</a> 
	<p>&copy; TechDirect 2017</p>
	</div>
</div>
</body>
</html>
