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

	
<?php include(__DIR__.'/php/navbar.php'); ?>


                   
                       

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
								<form method="POST" action="pc.php">
								<input type="hidden" name="id" value="'.$row["id"].'">
								<input type="submit" class="input_prezzo" value="Prezzo">
								<form>
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
								<form method="POST" action="pc.php">
								<input type="hidden" name="id" value="'.$row["id"].'">
								<input type="submit" class="input_prezzo" value="Prezzo">
								<form>
								</div></div>
			</div>
			
								
								
					
						
					';
				}
		}
	
		
	?>
	
</main>	

<?php include(__DIR__.'/php/footer.php'); ?>
	
</body>
</html>