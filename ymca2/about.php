<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/about.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>PC Home</title>
</head>
<body>
	<!-- navbar -->
	<?php include(__DIR__.'/php/navbar.php'); ?>

	<!-- main pagina -->
	<section class="about-main">	
		<div class="about-img">
			<h1>About</h1>
			<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <br> eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, <br>
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.	
			</h2>	
		</div>
		<div class="about-form">
			<form>
			<h1>About</h1>
			<h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.	
			</h2>
				<div class="name-form">
					<label for="name">Nome:</label>
					<input type="text" name="name" required>
				</div>
				<div class="email-form">
					<label for="email">Email:</label>
					<input type="text" name="email" required>
				</div>
				<div class="texta-form">
					<label for="textarea">Messaggio:</label>
					<input type="textarea" name="textarea" cols="20" rows="10" required>
				</div>
				<button type="submit">Submit</button>
			</form>
		</div>		
	</section>				
	</body>
</html>