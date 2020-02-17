<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>pc5</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<!-- CSS styles -->
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" href="./../css/php_style.css">
<!-- Font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
</head>

<body>

<?php 

include(__DIR__ .'/../php_Assembler/navbar.php');
include(__DIR__ .'/../php_Assembler/connection.php');

$query="SELECT * FROM `PC` WHERE id=5";

$data=$connection->query($query);

foreach($data as $row){
    
    
    ?>
    <div class="php_body">
    
    <img class="case" src="./../img/case2.jpg"></img>
    
    
    
    <div class="php_menu">
    
    <h1><?php echo $row["title"]?></h1>
    <ul>
    
    <li class="names"><?php echo $row["CPU"]?></li> 
    <li class="names"><?php echo $row["HD"]?></li>
    <li class="names"><?php echo $row["RAM"]?></li> 
    <li class="names"><?php echo $row["Motherboard"]?></li>
    <li class="names"><?php echo $row["Video"]?></li>
    <li class="names"><?php echo $row["OS"]?></li>
    <li class="names"><?php echo $row["Case"]?></li>  
    
    </ul>
    <h2>PREZZO</h2>
    
    <h1 class="price"><?php echo $row["Prezzo"]."€"?></h1>
    <button class="amzn" >Compra con Amazon</button>
    <button class="ebay">Compra con Ebay</button>
    </div>
    </div>
    <div class="lorem">
    <?php echo $row["title"]?>
    <?php }?>
    </div>
    
    </body>
    </body>
    
    
    </html>
    