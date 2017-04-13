<?php
	require_once('auth.php');
?>

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

<table width="400" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form id="form1" name="form1" method="post" action="add_topic.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3" bgcolor="#22412F"><strong>Create New Topic</strong> </td>
</tr>
<tr>
<td width="14%"><strong>Topic</strong></td>
<td width="2%">:</td>
<td width="84%"><input name="topic" type="text" id="topic" size="50" /></td>
</tr>
<tr>
<td valign="top"><strong>Detail</strong></td>
<td valign="top">:</td>
<td><textarea name="detail" cols="50" rows="3" id="detail"></textarea></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Submit" /> <input type="reset" name="Submit2" value="Reset" /></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<div id="footer">
	<a href="about.html">About Us</a> | 
	<a href="contactus.html">Contact Us</a> 
	<p>&copy; TechDirect 2017</p>
	</div>
</body>
</html>


