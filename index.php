<!DOCTYPE html>
<html lang="lt">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="F1 taškų skaičiuoklė">
	<meta name="author" content="Kodo naras">
	<title>F1 taškų skaičiuoklė</title>
	<link href="css/main.css" rel="stylesheet">
	<link href="vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="css/select.css">
	<link rel="stylesheet" href="css/fontawesome-free-5.0.1/web-fonts-with-css/css/fontawesome-all.css">
	<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<link rel="shortcut icon" href="images/favicon.png"/>
    <script src="js/date.js"></script>
</head>
<body id="top">
	<?php include('src/navigation.php'); ?>	
	<header>
		<?php include('src/banner.php'); ?>
	</header>
	<main> 
		<?php include('src/calender/calender.php'); ?>
		<?php include('src/calender/info_calender.php'); ?>
		<?php include('src/results/results.php'); ?>
		<?php include('src/results/info_results.php'); ?>
		<?php include('src/calculator/calculator.php'); ?>
	</main>
	<footer>
		<?php include('src/footer.php'); ?>
	</footer>
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
	<script src="js/scrolling-nav.js"></script>
    <script src="js/countdown.js"></script>
    <script src="js/calculator.js"></script>
    <script src="js/eventDriver1.js"></script>
    <script src="js/eventDriver2.js"></script>
    <script src="js/eventTeam.js"></script>
    <script src="js/eventEngine.js"></script>
</body>
</html>
