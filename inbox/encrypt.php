<?php
$pid = $_GET['pid'];
include("../include/connect.php");

$user = $_SESSION['user'];
$sel = "SELECT * FROM register WHERE username='$user'";
$res = $conn->query($sel);
if ($res->num_rows == 1) {
	while ($row = $res->fetch_array()) {
		$Name = $row[1];
	}
	$sel = "SELECT * FROM message WHERE id='$pid'";
	$res2 = $conn->query($sel);
	$msg_num = $res->num_rows;

	if (isset($_POST['submit'])) {
		extract($_POST);
		echo $chk = "SELECT * FROM message WHERE id='$id' AND kokoro='$key'";
		$result = $conn->query($chk);
		if ($result->num_rows == 1) {
			$_SESSION['id'] = $id;
			$_SESSION['key'] = $key;
			header("Location: decrypt.php");
			
		}
		else{
			echo "<script>
				alert('Wrong key supplied');
			</script>";
		}
	}

	?>
	<!DOCTYPE html>
	<head>
		<title>Visitors an Admin Panel Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
		Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />



	</head>
	<body>
		<?php
		include("includes/css.php");
		?>
		<!--main content start-->
		<section id="main-content">
			<section class="wrapper">
				<!-- //market-->

				<!-- //market-->
				<div class="row">
					<div class="panel-body">
						<div class="col-md-12 w3ls-graph">
							<!--agileinfo-grap-->
							<div class="agileinfo-grap">
								<div class="agileits-box">
									<header class="agileits-box-header clearfix">
										<h3>Inbox</h3>
										<div class="toolbar">
											<div class="col-md-12">
											<div class="col-md-6">
												<form method="POST">
													<div class="form-group">
														<label>Enter Decryption key</label>
														<input type="text" required="" name="key" class="form-control">
														<input type="text" style="display: none;" name="id" value="<?php echo($pid) ?>">
													</div>
													<input type="submit" name="submit" class="btn btn-danger" value="Decrypt">
												</form>
											</div>
										</div>
										<p>&nbsp;</p>
											<?php
											while ($row2 = $res2->fetch_array()) {
												$msg = "<p>Sender: <b>$row2[2]</b></p>
												<p>Senders' Mail: <b>$row2[1]</b></p>
												<p>Subject: <b>$row2[4]</b></p>
												<p>Message: <b>$row2[5]</b></p>

												";
											}
											$var = $msg;

											?>
											<script type="text/javascript" src="js/cypher.js"></script>
											<script type="text/javascript">
    //var text = 'Hello world Yakubu onana!';

    var text = <?php echo json_encode($var); ?>;
    var key  = 'MySecretKey';



var encoded = Cipher.keyRotate(text, key); // Þ¿ÑÒÜã½ÑÝn
var decoded = Cipher.keyRotate(encoded, key, true); // Hello world!
document.write(encoded);
//pdocument.write(decoded);
</script>


</div>
</header>
<div class="agileits-box-body clearfix">

</div>
</div>
</div>
<!--//agileinfo-grap-->

</div>
</div>
</div>
<!-- tasks -->


<!-- footer -->
<div class="footer">
	<div class="wthree-copyright">
		<p>© <?php echo date("Y"); ?>. All rights reserved </p>
	</div>
</div>
<!-- / footer -->
</section>
<!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
<!-- morris JavaScript -->	
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
		jQuery('.small-graph-box').hover(function() {
			jQuery(this).find('.box-button').fadeIn('fast');
		}, function() {
			jQuery(this).find('.box-button').fadeOut('fast');
		});
		jQuery('.small-graph-box .box-close').click(function() {
			jQuery(this).closest('.small-graph-box').fadeOut(200);
			return false;
		});

	    //CHARTS
	    function gd(year, day, month) {
	    	return new Date(year, month - 1, day).getTime();
	    }

	    graphArea2 = Morris.Area({
	    	element: 'hero-area',
	    	padding: 10,
	    	behaveLikeLine: true,
	    	gridEnabled: false,
	    	gridLineColor: '#dddddd',
	    	axes: true,
	    	resize: true,
	    	smooth:true,
	    	pointSize: 0,
	    	lineWidth: 0,
	    	fillOpacity:0.85,
	    	data: [
	    	{period: '2015 Q1', iphone: 2668, ipad: null, itouch: 2649},
	    	{period: '2015 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
	    	{period: '2015 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
	    	{period: '2015 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
	    	{period: '2016 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
	    	{period: '2016 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
	    	{period: '2016 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
	    	{period: '2016 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
	    	{period: '2017 Q1', iphone: 10697, ipad: 4470, itouch: 2038},

	    	],
	    	lineColors:['#eb6f6f','#926383','#eb6f6f'],
	    	xkey: 'period',
	    	redraw: true,
	    	ykeys: ['iphone', 'ipad', 'itouch'],
	    	labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
	    	pointSize: 2,
	    	hideHover: 'auto',
	    	resize: true
	    });


	});
</script>
<!-- calendar -->
<script type="text/javascript" src="js/monthly.js"></script>
<script type="text/javascript">
	$(window).load( function() {

		$('#mycalendar').monthly({
			mode: 'event',

		});

		$('#mycalendar2').monthly({
			mode: 'picker',
			target: '#mytarget',
			setWidth: '250px',
			startHidden: true,
			showTrigger: '#mytarget',
			stylePast: true,
			disablePast: true
		});

		switch(window.location.protocol) {
			case 'http:':
			case 'https:':
		// running on a server, should be good.
		break;
		case 'file:':
		alert('Just a heads-up, events will not work when run locally.');
	}

});
</script>
<!-- //calendar -->
</body>
</html>
<?php
}
else{
	header("Location: ../index.php");
}
