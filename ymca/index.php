	<?php  session_start();include('connection.php'); ?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="stylesheet" type="text/css" href="footer.css">
		<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<title>PC Home</title>
	</head>
	<body>


		<?php include('navbar.php'); ?>
		<!-- <header class="sopra">
			<nav>
				<h1>LOGO</h1>
				<div class="bar">
					<div class="comp">
						<p class="goccia">Vetrina</p>
					
					</div>
					<div class="home">
						<img class="casa" src="home.png" alt="hone icon">
					</div>
					<div class="info">
					
						<p class="goccia">Contatti</p>
					</div>
				</div>
			</nav>
		</header> -->


		<?php

		$query="SELECT *from pc where Fascia = 'Bassa' and id <3";

		$data=$connection->query($query);

		foreach($data as $row){ 

			
			echo'
			
			<main class="inde">

			<div class="mySlides fade">
			<div class="caros">
			<div class="case">
			<img src="data:image/png;base64,'.base64_encode($row["img"]).'" alt="immagine case">
			</div>
			<div class="dettagli">
			<h1 class="title">'.$row["title"].'</h1>
			<ul class="spec">
			<li class="testo">'.$row["CPU"].'</li>
			<li class="testo">'.$row["Video"].'</li>
			<li class="testo">'.$row["HD"].'</li>
			<li class="testo">'.$row["Motherboard"].'</li>
			</ul>
			</div>
			<div class="prezzo">
			<form method="POST" action="vetrina.php">
			<div class="listapc">
			<img class="freccia" src="arrow.png" alt="">
			<p class="testolista">Guarda i nostri pc di fascia Bassa</p>
			<input type="hidden" name="Fascia" value="Bassa">
			<input class="bottone" type="submit" id="addButton" value=" ">
			</form>
			</div>

			</div>
			</div> 
			</div>
			
			';}
			$media="SELECT *from pc where Fascia = 'Media' and id <3";

			$data=$connection->query($media);

			foreach($data as $row){ 


				echo'

				<div class="mySlides fade">
				<div class="caros">
				<div class="case">
				<img src="data:image/png;base64,'.base64_encode($row["img"]).'" alt="immagine case">
				</div>
				<div class="dettagli">
				<h1 class="title">'.$row["title"].'</h1>
				<ul class="spec">
				<li class="testo">'.$row["CPU"].'</li>
				<li class="testo">'.$row["Video"].'</li>
				<li class="testo">'.$row["HD"].'</li>
				<li class="testo">'.$row["Motherboard"].'</li>
				</ul>
				</div>
				<div class="prezzo">

				<form method="POST" action="vetrina.php">
				<div class="listapc">
				<img class="freccia" src="arrow.png" alt="">
				<p class="testolista">Guarda i nostri pc di fascia Media</p>

				<input type="hidden" name="Fascia" value="Media">
				<input class="bottone"type="submit" id="addButton" value=" ">
				</form>
				</div>


				</div>
				</div> 
				</div>

				';}
				$alta="SELECT *from pc where Fascia = 'Alta' and id <=3";

				$data=$connection->query($alta);

				foreach($data as $row){ 


					echo'

					<div class="mySlides fade">
					<div class="caros">
					<div class="case">
					<img src="data:image/png;base64,'.base64_encode($row["img"]).'" alt="immagine case">
					</div>
					<div class="dettagli">
					<h1 class="title">'.$row["title"].'</h1>
					<ul class="spec">
					<li class="testo">'.$row["CPU"].'</li>
					<li class="testo">'.$row["Video"].'</li>
					<li class="testo">'.$row["HD"].'</li>
					<li class="testo">'.$row["Motherboard"].'</li>
					</ul>
					</div>
					<div class="prezzo">
					<form method="POST" action="vetrina.php">
					<div class="listapc">
					<img class="freccia" src="arrow.png" alt="">
					<p class="testolista">Guarda i nostri pc di fascia Alta</p>

					<input type="hidden" name="Fascia" value="Alta">
					<input class="bottone"type="submit" id="addButton" value=" ">

					</form>
					</div>

					</div>
					</div> 
					</div>

					';}
					?>


					<div class="pagine" style="text-align:center">
						<span class="dot" onclick="currentSlide(1)"></span> 
						<span class="dot" onclick="currentSlide(2)"></span> 
						<span class="dot" onclick="currentSlide(3)"></span> 
					</div>
				</main>


				<footer class="footer-distributed">

					<div class="footer-right">

						<a href="#" class="fa fa-facebook"></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-linkedin"></i></a>
						<a href="#"><i class="fab fa-github"></i></a>

					</div>

					<div class="footer-left">

						<p class="footer-links">
							<a class="link-1" href="index.php">Home</a>

							<a class="link-1" href="vetrina.php">Vetrina</a>

							<a class="link-1" href="vetrina.php">Contatti</a>
						</p>

						<p>Liviana &copy; 2020</p>
					</div>

				</footer>
				<!-- script per carousel -->
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
	// 					function Bassa(){

	// 						createCookie("Fascia", "Alta", "10"); 
	// 						window.open('http://localhost/Assembler/ymca/vetrina.php',"_self");

	// 					}
	// 					function Media(){

	// 						createCookie("Fascia", "Media", "10"); 
	// 						window.open('http://localhost/Assembler/ymca/vetrina.php',"_self");

	// 					}
	// 					function Alta(){
	// 					createCookie("Fascia", "Alta", "10"); 
	// 					window.open('http://localhost/Assembler/ymca/vetrina.php',"_self");

	// 					}
	// 					function createCookie(name, value, days) { 
	// 					var expires; 

	// 					if (days) { 
	// 					var date = new Date(); 
	// 					date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000)); 
	// 					expires = "; expires=" + date.toGMTString(); 
	// 				} 
	// 				else { 
	// 					expires = ""; 
	// 				} 

	// 				document.cookie = escape(name) + "=" +  
	// 					escape(value) + expires + "; path=/"; 
	// } 
// 				</script>
<script>

			// function Bassa(){

			// 	echo "ciao";

			// }
		// 	</script>



	<!-- 				 
					<script>
						var slideIndex = 0;
						showSlides();

						function showSlides() {
							var i;
							var slides = document.getElementsByClassName("mySlides");
							for (i = 0; i < slides.length; i++) {
								slides[i].style.display = "none";
							}
							slideIndex++;
							if (slideIndex > slides.length) {slideIndex = 1}
								slides[slideIndex-1].style.display = "block";
	setTimeout(showSlides, 5000); // Change image every 3 seconds
} -->
</script>



</body>
</html>