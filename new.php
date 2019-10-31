<?php

$test = $_GET['test'] ?? '';

if($test == '404'){
	error_404();
}




?>
<?php $page_title = "Create Submission"?>
<html>
<head>
	<title>Kiara Mutschler</title>
	<link href="resume.css" type="text/css" rel="stylesheet">
	<link rel="icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Mansalva|Source+Serif+Pro&display=swap" rel="stylesheet">
</head>
<body>
		<div class="top">
			<div class="nav-bar">
				<a href="index.html"><p class="home"> Home </p></a>
				<a href="resume.html"><p class="resume"> Resume </p></a>
				<a href="youtube.html"><p class="youtube"> YouTube </p></a>
				<a href="contactMe.html"><p class="contact"> Contact Me </p></a>
			</div>
			<h1 class="thankYou"> Thank You! </h1>
		</div>
</body>
</html>