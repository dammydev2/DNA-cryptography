<?php
include("include/connect.php");
if (isset($_POST['submit'])) {
	extract($_POST);
	$sel = "SELECT * FROM register WHERE username='$Username' AND password='$password' ";
	$res = $conn->query($sel);
	if ($res->num_rows == 1) {
		$_SESSION['user'] = $Username;
		header("Location: inbox");
	}
	else{
		echo "<script>
			alert('no record found');
		</script>";
		echo $conn->error;
	}
}
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Spin Login Form Responsive Widget Template :: w3layouts</title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Spin Login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!--// Stylesheets -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
	<h1>Secured send </h1>
	<div class="clear-loading spinner">
		<span></span>
	</div>
	<div class="w3ls-login box box--big">
		<!-- form starts here -->
		<form action="#" method="POST">
			<div class="agile-field-txt">
				<label><i class="fa fa-user" aria-hidden="true"></i> Username </label>
				<input type="text" name="Username" placeholder="Enter User Name" required="" />
			</div>
			<div class="agile-field-txt">
				<label><i class="fa fa-unlock-alt" aria-hidden="true"></i> password </label>
				<input type="password" name="password" placeholder="Enter Password" required="" id="myInput" />
				<p>&nbsp;</p>
					<a href="register.php" style="color: #fff;">Click here to register</a><br>
				<div class="agile_label">
					<input id="check3" name="check3" type="checkbox" value="show password" onclick="myFunction()">
					<label class="check" for="check3">Show password</label>
				</div>
				<div class="agile-right">
					<a href="#">forgot password?</a>
				</div>
			</div>
			<!-- script for show password -->
			<script>
				function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
			</script>
			<!-- //end script -->
				<input type="submit" value="LOGIN" name="submit">
		</form>
	</div>
	<!-- //form ends here -->
	<!--copyright-->
	<div class="copy-wthree">
		<p>© <?php echo date("Y"); ?> The secured Send . All Rights Reserved 
		</p>
	</div>
	<!--//copyright-->
</body>
</html>