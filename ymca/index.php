	<?php  session_start();include('connection.php'); ?>
	<!DOCTYPE html>
	<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
		<title>PC Home</title>
	</head>
	<body>
		<header class="sopra">
			<nav>
				<h1>LOGO</h1>
				<div class="bar">
					<div class="comp">
						<p class="goccia">Vetrina</p>
						<!-- <img src="pc.png" alt="pc icon"> -->
					</div>
					<div class="home">
						<img class="casa" src="home.png" alt="hone icon">
					</div>
					<div class="info">
						<!-- <img src="info.png" alt="info icon"> -->
						<p class="goccia">Contatti</p>
					</div>
				</div>
			</nav>
		</header>


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
								<h1>'.$row["title"].'</h1>
								<ul>
									<li>'.$row["CPU"].'</li>
									<li>'.$row["Video"].'</li>
									<li>'.$row["HD"].'</li>
									<li>'.$row["Motherboard"].'</li>
								</ul>
							</div>
							<div class="prezzo">
								<form method="POST" action="vetrina.php">
									<div class="listapc">
									<img class="freccia" src="arrow.png" alt="">
									<p class="testolista">Guarda i nostri pc di fascia Alta</p>
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
							<h1>'.$row["title"].'</h1>
							<ul>
								<li>'.$row["CPU"].'</li>
								<li>'.$row["Video"].'</li>
								<li>'.$row["HD"].'</li>
								<li>'.$row["Motherboard"].'</li>
							</ul>
						</div>
						<div class="prezzo">
						
						<form method="POST" action="vetrina.php">
								<div class="listapc">
								<img class="freccia" src="arrow.png" alt="">
								<p class="testolista">Guarda i nostri pc di fascia Alta</p>
								
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
							<h1>'.$row["title"].'</h1>
							<ul>
								<li>'.$row["CPU"].'</li>
								<li>'.$row["Video"].'</li>
								<li>'.$row["HD"].'</li>
								<li>'.$row["Motherboard"].'</li>
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