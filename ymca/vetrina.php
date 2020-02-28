<?php session_start(); include(__DIR__.'/php/connection.php')?>;

<!DOCTYPE html>
<html>
<head>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="./css/style.css">
	<link rel="stylesheet" type="text/css" href="./css/vetrina.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<title>PC Home</title>
</head>
<body>
	<!-- navbar -->
	<?php include(__DIR__.'/php/navbar.php'); ?>
	<div class="sfondo2" style="height: 100%;">
		<!-- riccardo metti ste due cose nel php dinamico per lo sfondo chiedi e ti spiego -->
	<main class="inde">
	<?php 
		//main pagina
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

<form  method="POST" action="paginapc.php">
<input type="submit" class="prezzo" value="Prezzo">
<input type="hidden" name="Fascia" value="'.$row["id"].'">
</form>
									
									<img src="data:image/png;base64,'.base64_encode($row["img"]).'" alt="">
									
									
									
									</div></div>
				</div>';}}

					else{

						$query="SELECT * FROM `PC` ORDER BY Prezzo ASC";
			
			$data=$connection->query($query);
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

<form  method="POST" action="paginapc.php">
<input type="submit" class="prezzo" value="Prezzo">
<input type="hidden" name="Fascia" value="'.$row["id"].'">
</form>
									
									<img src="data:image/png;base64,'.base64_encode($row["img"]).'" alt="">
									
									
									
									</div></div>
				</div>';}


					}
		
?>
	</main>
		</div>
<script>
	
</script>
	</body>
	</html>