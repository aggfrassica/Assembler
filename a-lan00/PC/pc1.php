<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>pc1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- CSS styles -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="./../css/php_style.css">
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>

    <?php 
    include(__DIR__ .'/../php_Assembler/navbar.php'); //Carica dinamicamente il codice della navbar
    include(__DIR__ .'/../php_Assembler/connection.php'); //Stabilisce connessione con il database

    $query="SELECT * FROM `PC` WHERE id=1";

    $data=$connection->query($query); // esegue la query precedente

    foreach($data as $row){

        ?>


        <div class="php_body">
            <img class="case" src="./../img/case2.jpg"></img>
            <div class="php_menu">
                <!-- Carica titolo dal db -->
                <h1 class="titolo"><?php echo $row["title"]?></h1> 
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
        </div>
        <?php 
    }   // include(__DIR__ .'/../php_Assembler/footer.php');
    ?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>


</html>