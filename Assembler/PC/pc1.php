<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>pc1</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <link rel="stylesheet" href="./../css/navbar.css">
        <link rel="stylesheet" href="./../css/php_style.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    
    <body>
       
        <?php 
        
        include(__DIR__ .'/../php_Assembler/connection.php');

        $query="SELECT * FROM `PC` WHERE id=1";

        $data=$connection->query($query);
        
        foreach($data as $row){
        
        ?>
        <!-- HTML PER LA NAVBAR -->
    <div class="topnav" id="myTopnav">
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
        </a>
        <a href="#home">Home</a>
        <a href="#news">News</a>
        <a href="#contact">Contact</a>
        <a href="#about">About</a>  
    </div>

<!-- SCRIPT PER LA NAVBAR -->
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
        
        <div class="php_body">
        
        <img class="case" src="./../img/case2.jpg"></img>
        


        <div class="php_menu">

        <h1><?php echo $row["title"]?></h1>
        <ul>
        

          <li><?php echo $row["HD"]?></li>
          <li><?php echo $row["RAM"]?></li> 
          <li><?php echo $row["Motherboard"]?></li>
          <li><?php echo $row["Video"]?></li>
          <li><?php echo $row["OS"]?></li>
          <li><?php echo $row["Case"]?></li>
           

        </ul>
        <h2>PREZZO</h2>
        
        <h1 class="price"><?php echo $row["Prezzo"]."€"?></h1>
        <button class="amzn" >Compra con Amazon</button>
        <button class="ebay">Compra con Ebay</button>
        </div>
        </div>
        <div class="lorem">
        <?php echo $row["title"]?>
        </div>
        <?php }?>
    </body>
    
    
    </html>
