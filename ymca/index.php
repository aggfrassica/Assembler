<?php  session_start();include(__DIR__.'/php/connection.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<title>PC Home</title>
</head>
<body>
	<!-- navbar -->
	

	<?php include(__DIR__.'/php/navbar.php'); ?>
	
	<!-- main pagina -->
	<div class="sfondo">
		
		<div class="slideshow-container">
<?php 

		$query="SELECT *from pc where Fascia = 'Bassa' and id <3";

		$data=$connection->query($query);

		foreach($data as $row){ 
			echo'<div class="mySlides fade">
				<div class="img_content">
					

				<img src="data:image/png;base64,'.base64_encode($row["img"]).'" alt="immagine case">
					<div class="cont_butt">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip</p>

						<form method="POST" action="vetrina.php">

						
							
								<input type="hidden" name="Fascia" value="Bassa">
							<input class="sfoglia" type="submit" id="addButton" value="Guarda i pc di fascia* ">
							
							
							
						</form>
					</div>
				</div>
			</div>';}


			$media="SELECT *from pc where Fascia = 'Media' and id <3";

			$data=$connection->query($media);

			foreach($data as $row){ 
			echo '<div class="mySlides fade">
				<div class="img_content">
					

					<img src="data:image/png;base64,'.base64_encode($row["img"]).'" alt="immagine case">
					<div class="cont_butt">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
						<form method="POST" action="vetrina.php">

						
							
								<input type="hidden" name="Fascia" value="Media">
							<input class="sfoglia" type="submit" id="addButton" value="Guarda i pc di fascia* ">
							
							
							
						</form>
					</div>
				</div>
			</div>';}


			$alta="SELECT *from pc where Fascia = 'Alta' and id <=3";

			$data=$connection->query($alta);

			foreach($data as $row){ 
			echo '<div class="mySlides fade">
				<div class="img_content">
					

				<img src="data:image/png;base64,'.base64_encode($row["img"]).'" alt="immagine case">
					<div class="cont_butt">
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
						<form method="POST" action="vetrina.php">

						
							
								<input type="hidden" name="Fascia" value="Alta">
							<input class="sfoglia" type="submit" id="addButton" value="Guarda i pc di fascia* ">
							
							
							
						</form>
					</div>
				</div>';}
				
				?>
			</div>

			
			<!-- tre pallini per carousel -->
			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span> 
				<span class="dot" onclick="currentSlide(2)"></span> 
				<span class="dot" onclick="currentSlide(3)"></span> 
			</div>
		</div>
		

		

	</div>


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
					slides[slideIndex-1].style.display = "block";  
					dots[slideIndex-1].className += " active";
				}
			</script>			
		</body>
		</html>