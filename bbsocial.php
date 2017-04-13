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
  <title>About</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style/base.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
			<a href="../pc.html" id="pcdropdown">PC</a>
			<a href="../xbox.html" id="xboxdropdown">Xbox One</a>
			<a href="../ps4.html" id="psdropdown">PS4</a>
			<a href="../switch.html" id="switchdropdown">Switch</a>
			<a href="../mobile.html" id="mobiledropdown">Mobile</a>
		</div>
	</div>
	</li>
	<li><a href="directory.html">Directory</a></li>
	<li><a href="mainforumpage.html">Community</a></li>
	</ul>
</div>

	<div class="container">
		<div class="row"> 
			<div class="col-xs-4">
				<a href="#" class="pop" data-title="Rangers" data-desc="Bertram is the CST Demigod of Set B. 
				The Demigod that has gracisouly showered us with his presence. He will bravely tell us the 
				plans of his battle plan. But as we charge into battle, we will discover that he is nowhere to be found. He is who we look for at the first light on the fifth day. Despite this flaw, 
				he will appear exactly when is needed and not a minute before." 	
				data-source="<strong>Source</strong> Bert">
				<img src="images/rangers.jpg" class="img-responsive" height="200" width="200" alt="kev"/>
				</a>
			</div>
			<div class="col-xs-4">
				<a href="#" class="pop" data-title="Darian" data-desc="Maple Ridge Resident. Not Darien as shown above!" 
				data-source="<strong>Source</strong> Darian">
				<img src="images/darien.jpg" class="img-responsive" height="200" width="200" alt="kev"/>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-3">
				<a href="#" class="pop" data-title="Kevin" 
				data-desc="Your Pentalingual WonderingWanderer. Think and travel. Vamos la!
				data-source="Kev">
				<img src="images/lawluffy.jpg" class="img-responsive" height="200" width="200" alt="kev"/>
				</a>
			</div>  
			<div class="col-xs-3">
				<a href="#" class="pop" data-title="Xin" data-desc="Do not gamble against him, for you will lose." data-source="<strong>Source</strong> Xin">
				<img src="images/1.JPG" class="img-responsive" height="200" width="200" alt="xin"/>
				</a>
			</div>  
			<div class="col-xs-3">
				<a href="#" class="pop" data-title="Vincent" data-desc="TechDirect's very own Apple Guru" data-source="<strong>Source</strong> Vincent">
				<img src="images/shredder.gif" class="img-responsive" height="200" width="200" alt="vin"/>
				</a>
			</div>   
		</div>
	</div>
	<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog" data-dismiss="modal">
			<div class="modal-content">
				<div class="modal-body">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span>

					</button>
					<div class="text-center img">
						<img src="" class="img-responsive imagepreview" />
					</div>
					<div class="img-description">
						<p class="text-left title"></p>
						<p class="text-left desc"></p>
						<p class="text-left source"></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script>
			$(function () {
				$('.pop').on('click', function () {
					var title = $(this).data('title');
					var desc = $(this).data('desc');
					var source = $(this).data('source');
					$('.title').text(title);
					$('.desc').text(desc);
					$('.source').html(source);
					$('.imagepreview').attr('src', $(this).find('img').attr('src'));
					$('#imagemodal').modal('show');
				});
			});
	</script>

	<div id="footer">
	<a href="about.html">About Us</a> | 
	<a href="contactus.html">Contact Us</a>
	<p>&copy; TechDirect 2017</p>
	</div>
</div>
</body>
</html>
<!--NOTES: 1. Page responsive, but information goes way further left before nav list adjusts. Can't adjust nav bar for some reason.-->
<!--2. Fixing with div containers cancels out responsive design.-->