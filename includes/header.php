<?php
$companyname = "Luke's Diner";
include("includes/arrays.php");
?>
<!DOCTYPE HTML>
<html>
<head>
<title><?php TITLE; ?></title>
<link href="css/style.css" rel="stylesheet">
</head>

<body id="mainwrapper">
	<div class="wrapper">
		<div id="banner">
			<a href="index.php" title="Return to Home">
				<img src="images/lukeslogo.jpg" height="290" width="700" alt="Luke's Diner">
			</a>
		</div><!--banner-->
		<div id="nav">
				<?php include("includes/nav.php");?>
		</div><!--nav-->
		<div class="content">