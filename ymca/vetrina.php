<?php session_start(); include('connection.php');?>

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
					<p>Vetrina</p>
					<img src="pc.png" alt="pc icon">
				</div>
				<a href="index.php"><div class="home">
					 <img class="casa" src="home.png" alt="hone icon">
				</div></a>
				<div class="info">
					<img src="info.png" alt="info icon">
					<p>Contatti</p>
				</div>
			</div>
		</nav>
	</header>


	<main>
	<?php
		if (isset($_POST["Fascia"])){
			$fascia=strval($_POST["Fascia"]);
			
			$query1="SELECT *from pc where Fascia = '$fascia'";
			
			$data=$connection->query($query1);
			foreach($data as $row){ 

				echo '<div class="pc">
				<div class="circle">
					<div class="prova"></div>
					<img src="data:image/png;base64,'.base64_encode($row["img"]).'" alt="">
				</div>
			</div>';
			
		}

		}
		else{


			
	
		
			$query="SELECT * FROM `PC` ORDER BY Prezzo ASC";
				$data=$connection->query($query);
				foreach($data as $row){ 

						echo '
					
						<div class="pc">
				<div class="circle">
					<div class="prova"></div>
					<img src="data:image/png;base64,'.base64_encode($row["img"]).'" alt="">
				</div>
			</div>
			
								
								
					
						
					';
				}
		}
	
		
	?>
	
</main>	
	
</body>
</html>