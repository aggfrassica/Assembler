<?php  session_start();include(__DIR__.'/php/connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>PC Home</title>
</head>
<body>
	<!-- navbar -->
	

	<?php include(__DIR__.'/php/navbar.php'); ?>
	
	<!-- main pagina -->
	<section id="maintop">
		<header class="super-top">
		<h1>Assembla il tuo pc.</h1>
		<h2>Scegli il pc piu adatto a te, compralo, <br>
			e noi lo assembliamo e te lo spediamo.
		</h2>
		<!-- <button href="#scegli">Scegli il tuo pc</button> -->
		<a href="#scegli">Scegli il tuo pc</a>
		</header>
	</section>

	<section id="scegli">
		<header class="descr-fascia">
			<h1>Scegli il computer giusto per te</h1>
			<h2>Abbiamo creato tre fasce di computer <br>
				bassa, media e alta <br>
				scegli la fascia più adatta al te e guarda cosa possiamo offrire
			</h2>
		</header><!-- /header -->
	
		<div class="mostra-fascia">
		
		<div class="slideshow-container">
			<?php 

		$query="SELECT *from pc where Fascia = 'Bassa' and id=1";

		$data=$connection->query($query);

		foreach($data as $row){ 
			echo'<div class="mySlides fade">
					<div class="img_content">
						<img class="caseimg" src="data:image/png;base64,'.base64_encode($row["img"]).'" alt="immagine case">
					</div>
					<div class="cont_butt">
						<p>Hai bisogno di un PC non troppo costoso ma vuoi comunque avere buone prestazioni?<br>
							I nostri assemblati di fascia <strong>Bassa</strong> fanno al caso tuo!<br>
							Scopri quale nostro assemblato fa al caso tuo.
						</p>
						<form method="POST" action="vetrina.php">
							<input type="hidden" name="Fascia" value="Bassa">
							<input class="sfoglia" type="submit" id="addButton" value="Guarda i pc di fascia Bassa ">	
						</form>
					</div>
				</div>';}


			$media="SELECT *from pc where Fascia = 'Media' and id =4";

			$data=$connection->query($media);

			foreach($data as $row){ 
			echo '<div class="mySlides fade">
				<div class="img_content">
					

				<img class="caseimg" src="data:image/png;base64,'.base64_encode($row["img"]).'" alt="immagine case">
					
				</div>

				<div class="cont_butt">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip</p>

						<form method="POST" action="vetrina.php">

						
							
								<input type="hidden" name="Fascia" value="Media">
							<input class="sfoglia" type="submit" id="addButton" value="Guarda i pc di fascia Media ">
							
							
							
						</form>
					</div>

			</div>';}


			$alta="SELECT *from pc where Fascia = 'Alta' and id =7";

			$data=$connection->query($alta);

			foreach($data as $row){ 
			echo '<div class="mySlides fade">
				<div class="img_content">
					

				<img class="caseimg" src="data:image/png;base64,'.base64_encode($row["img"]).'" alt="immagine case">
					
				</div>

				<div class="cont_butt">
						<p>I nostri assemblati
							di fascia <strong>Alta</strong> sono ottimizzati per permetterti di vivere esperienze di Gaming immersive.<br>
							Sfruttando una buona potenza grafica potrai ottenere alte prestazioni di gioco.<br>
							Scopri quale nostro assemblato fa al caso tuo.<br>
						</p>

						<form method="POST" action="vetrina.php">

						
							
								<input type="hidden" name="Fascia" value="Alta">
							<input class="sfoglia" type="submit" id="addButton" value="Guarda i pc di fascia Alta ">
							
							
							
						</form>
					</div>

			</div>';}
				
				?>
			</div>

			
			<!-- tre pallini per carousel -->
			<div class="pallini">
				<span class="dot" onclick="currentSlide(1)"></span> 
				<span class="dot" onclick="currentSlide(2)"></span> 
				<span class="dot" onclick="currentSlide(3)"></span> 
			</div>
		</div>
	</section>

		

		


	<script>
		var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
			showSlides(slideIndex += n);
		}

		function currentSlide(n) {
			showSlides(slideIndex = n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("dot");
			if (n > slides.length) {slideIndex = 1}    
				if (n < 1) {slideIndex = slides.length}
					for (i = 0; i < slides.length; i++) {
						slides[i].style.display = "none";  
					}
					for (i = 0; i < dots.length; i++) {
						dots[i].className = dots[i].className.replace(" active", "");
					}
					slides[slideIndex-1].style.display = "flex";  
					dots[slideIndex-1].className += " active";
				}
			</script>			
		</body>
		</html>