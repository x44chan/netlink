<?php date_default_timezone_set("Asia/Manila"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title> Netlink <?php if(isset($title)){echo ' - ' . $title; }?> </title>
		<base href="<?php echo "http://$_SERVER[HTTP_HOST]";?>/netlink/"/>
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">	
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/css.css">
		<link rel="stylesheet" href="css/nprogress.css">
		<link rel="stylesheet" href="css/hovs.css">
		
		<!-- jQuery library -->
		<script src="js/jquery.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		
		<script src="js/js.js"></script>		
		<script type="text/javascript" src="js/highcharts.js"></script>
		<script type="text/javascript" src="js/exporting.js"></script>		
		<script type="text/javascript" src="js/nprogress.js"></script>

	</head>
	<body>
