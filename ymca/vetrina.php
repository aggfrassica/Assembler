<?php session_start(); include('connection.php');?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="card.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">

	<title>PC Home</title>
</head>
<body>

	
<?php include('navbar.php'); ?>


                   
                       

	<main class="inde">
	<?php
		if (isset($_POST["Fascia"])){
			$fascia=strval($_POST["Fascia"]);
			
			$query1="SELECT *from pc where Fascia = '$fascia'";
			
			$data=$connection->query($query1);
			foreach($data as $row){ 

				echo '<div class="pc">
				<div class="card">
					<div class="face face1">
						<div class="content">
					
					<h1 class="title">'.$row["title"].'</h1>
								<ul class="spec">
									<li class="testo">'.$row["CPU"].'</li>
									<li class="testo">'.$row["Video"].'</li>
									<li class="testo">'.$row["HD"].'</li>
									<li class="testo">'.$row["Motherboard"].'</li>
								</ul>
								</div>
								</div>
								<div class="face face2">
								<img src="data:image/png;base64,'.base64_encode($row["img"]).'" alt="">
								<h3 class="prezzo">Prezzo</h3>
								</div></div>
			</div>';
			
		}

		}
		else{


			
	
		
			$query="SELECT * FROM `PC` ORDER BY Prezzo ASC";
				$data=$connection->query($query);
				foreach($data as $row){ 

						echo '
					
						<div class="pc">
				<div class="card">
					<div class="face face1">
						<div class="content">
					
					<h1 class="title">'.$row["title"].'</h1>
								<ul class="spec">
									<li class="testo">'.$row["CPU"].'</li>
									<li class="testo">'.$row["Video"].'</li>
									<li class="testo">'.$row["HD"].'</li>
									<li class="testo">'.$row["Motherboard"].'</li>
								</ul>
								</div>
								</div>
								<div class="face face2">
								<img src="data:image/png;base64,'.base64_encode($row["img"]).'" alt="">
							<h3 class="prezzo">Prezzo</h3>
								</div></div>
			</div>
			
								
								
					
						
					';
				}
		}
	
		
	?>
	
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
	
</body>
</html>