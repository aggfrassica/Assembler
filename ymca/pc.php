<?php session_start(); include(__DIR__.'/php/connection.php');?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/card.css">
	<link rel="stylesheet" type="text/css" href="./css/footer.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

	<title>PC Home</title>
</head>
<body>

	
<?php include(__DIR__.'/php/navbar.php'); 
//echo $_POST['id'];
?>


                   
                       

	<main class="main_pc">
	

	<div class="caros_pc">
					<div class="case">
					<img src="./img/case2.jpg" alt="immagine case">
						<div class="pagine" style="text-align:center">
							<span class="dot" onclick="currentSlide(1)"></span> 
							<span class="dot" onclick="currentSlide(2)"></span> 
							<span class="dot" onclick="currentSlide(3)"></span> 
						</div>
					</div>
					<div class="dettagli">
					  <h1 class="title">titolo</h1>
						<ul class="spec">
							<li class="testo">'.$row["CPU"].'</li>
							<li class="testo">'.$row["Video"].'</li>
							<li class="testo">'.$row["HD"].'</li>
							<li class="testo">'.$row["Motherboard"].'</li>
						</ul>
					
						<div class="prezzo">
							<h1>1000</h1>
						</div>
					</div>
					
					<button class="amzn" >Compra con Amazon</button>
                	
					</div>
				
		
	
	
	</main>	


<?php include(__DIR__.'/php/footer.php'); ?>
	
</body>
</html>