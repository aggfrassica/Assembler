
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<title>PC Home</title>
</head>
<body>
	<?php 
	session_start();
		echo $_POST["Fascia"];
	?>
	<header class="sopra">
		<nav>
			<h1>LOGO</h1>
			<div class="bar">
				<div class="comp">
					<p>Vetrina</p>
					<img src="pc.png" alt="pc icon">
				</div>
				<div class="home">
					<img class="casa" src="home.png" alt="hone icon">
				</div>
				<div class="info">
					<img src="info.png" alt="info icon">
					<p>Contatti</p>
				</div>
			</div>
		</nav>
	</header><!-- /header -->

	<main>
		<div class="pc1">
			<div class="circle">
				<div class="prova"></div>
				<img src="case2.jpg" alt="">
			</div>
		</div>
		<div class="pc2">
			<div class="circle">
				<div class="prova"></div>
				<img src="case2.jpg" alt="">
			</div>
		</div>	
		<div class="pc3">
			<div class="circle">
				<div class="prova"></div>
				<img src="case2.jpg" alt="">
			</div>
		</div>	
		<div class="pc1">
			<div class="circle">
				<div class="prova"></div>
				<img src="case2.jpg" alt="">
			</div>
		</div>
		<div class="pc2">
			<div class="circle">
				<div class="prova"></div>
				<img src="case2.jpg" alt="">
			</div>
		</div>	
		<div class="pc3">
			<div class="circle">
				<div class="prova"></div>
				<img src="case2.jpg" alt="">
			</div>
		</div>	
	</main>

	
</body>
</html>