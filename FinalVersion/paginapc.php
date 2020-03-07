<?php  session_start();include(__DIR__.'/php/connection.php');?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/paginapc.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>PC Home</title>
</head>
<body>
	<!-- navbar -->
	
	<?php include(__DIR__.'/php/navbar.php');  ?>
	
	<!-- main pagina -->

	<section id="main-pagina">
		<div class="slideshow-containers">
		<?php
			$id=intval($_POST['Fascia']);
			
			
			$query2="SELECT * ,pc.id
			FROM images
			inner join pc 
			ON pc.images_idimages = images.idimages
			where pc.id='$id'";

			$data=$connection->query($query2); // esegue la query precedente

		foreach($data as $row){
		echo'
			<div class="mySlides fade">
				<div class="img_content">
					

				<img src="data:image/png;base64,'.base64_encode($row["images_Case"]).'" style="width:100%">
					
				</div>
			</div>

			<div class="mySlides fade">
				<div class="img_content">
					

					<img src="data:image/png;base64,'.base64_encode($row["images_CPU"]).'" style="width:100%">
					
				</div>
			</div>

			<div class="mySlides fade">
				<div class="img_content">
					

					<img src="data:image/png;base64,'.base64_encode($row["images_SV"]).'" style="width:100%">
					
				</div>
			</div>';}?>
			
			<br>
			<!-- tre pallini per carousel -->
			<div style="text-align:center">
				<span class="dot" onclick="currentSlide(1)"></span> 
				<span class="dot" onclick="currentSlide(2)"></span> 
				<span class="dot" onclick="currentSlide(3)"></span> 
			</div>
		</div>


		<div class="dettagli">
			<div class="dettagli-cont">
				
			
			<?php
			$query="SELECT * ,pc.id
			FROM images
			inner join pc 
			ON pc.images_idimages = images.idimages
			where pc.id='$id'";

			$data=$connection->query($query);
			foreach($data as $row){
				echo '<h1>'.$row["title"].'</h1>
				<ul class="spec">
				
					<li>'.$row["CPU"].'</li>
					
					<li>'.$row["RAM"].'</li>
					
					<li>'.$row["HD"].'</li>
					
					<li>'.$row["OS"].'</li>
					
					<li>'.$row["Motherboard"].'</li>
					
					<li>'.$row["Case"].'</li>
					<h2 class="prezzotxt">Prezzo:</h2>
					<h2 class="prezzo">'.$row["Prezzo"].'€</h2>
				</ul>';
			}
			session_destroy();
				?>
				<a href="#">Compralo su Amazon</a>
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
					slides[slideIndex-1].style.display = "block";  
					dots[slideIndex-1].className += " active";
				}
			</script>			
		</body>
		</html>