<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- CSS styles -->
  <link rel="stylesheet" type="text/css" href="../css/style.css"> <!-- Non funziona con il resto dello stile -->
  <link rel="stylesheet" href="../css/card.css">
  <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:600&display=swap" rel="stylesheet">
</head>
<body>

<!-- CARICO PC 1 DAL DATABASE -->
  <?php include(__DIR__ .'/../php_Assembler/navbar.php');
  include(__DIR__ .'/../php_Assembler/connection.php');

  $query="SELECT * FROM `PC` WHERE id=1";

$data=$connection->query($query); // esegue la query precedente

foreach($data as $row){ 
  ?>


  <div class="topnello">
    <div class="testobello">
      <h1 class="gran">Vetrina PC</h1>
      <h4>Vetrina di tutti i pc disponibili</h4>
    </div>
  </div>

  <!-- vetrina pc -->
<div class="container-fluid">
    <div class="row row-cols-1 row-cols-md-3">
      <div class="col-sm-auto">
        <div class="card">
          <?php echo '<img src="data:image/png;base64,'.base64_encode($row["img"]).'" class="card-img-top" alt="immagine case">'?>
          <div class="card-body">
            <h5 class="card-title"><?php echo $row["title"]?></h5>
            <ul class="spec">
              <li class="testo"><?php echo $row["CPU"]?></li>  
              <li class="testo"><?php echo $row["HD"]?></li>
              <li class="testo"><?php echo $row["RAM"]?></li> 
              <li class="testo"><?php echo $row["Video"]?></li>
            </ul>
            <a href="../PC/pc1.php" class="btn btn-primary"><?php echo $row["Prezzo"]."€"?></a>
          </div>
        </div>
      </div>
      <!-- CARICO PC 2 DAL DATABASE -->
      <?php
    }
    $query="SELECT * FROM `PC` WHERE id=2";

    $data=$connection->query($query); // esegue la query precedente

    foreach($data as $row){



    ?>
    <div class="col-sm-auto">
    <div class="card">
    <?php echo '<img src="data:image/png;base64,'.base64_encode($row["img"]).'" class="card-img-top" alt="immagine case">'?>
      <div class="card-body">
        <h5 class="card-title"><?php echo $row["title"]?></h5>
        <ul class="spec">
          <li class="testo"><?php echo $row["CPU"]?></li>  
          <li class="testo"><?php echo $row["HD"]?></li>
          <li class="testo"><?php echo $row["RAM"]?></li> 
          <li class="testo"><?php echo $row["Video"]?></li>

        </ul>
        <a href="../PC/pc2.php" class="btn btn-primary"><?php echo $row["Prezzo"]."€"?></a>

      </div>
    </div>
    </div>
    <!-- CARICO PC 3 DAL DATABASE -->
   <?php
   }
   $query="SELECT * FROM `PC` WHERE id=3";

   $data=$connection->query($query); // esegue la query precedente

    foreach($data as $row){



    ?>
    <div class="col-sm-auto">
      <div class="card">
      <?php echo '<img src="data:image/png;base64,'.base64_encode($row["img"]).'" class="card-img-top" alt="immagine case">'?>
        <div class="card-body">
          <h5 class="card-title"><?php echo $row["title"]?></h5>
          <ul class="spec">
            <li class="testo"><?php echo $row["CPU"]?></li>  
            <li class="testo"><?php echo $row["HD"]?></li>
            <li class="testo"><?php echo $row["RAM"]?></li> 
            <li class="testo"><?php echo $row["Video"]?></li>

          </ul>
          <a href="../PC/pc3.php" class="btn btn-primary"><?php echo $row["Prezzo"]."€"?></a>
        </div>
      </div>
    </div>
    <!-- CARICO PC 4 DAL DATABASE -->
    <?php
    }
    $query="SELECT * FROM `PC` WHERE id=4";

    $data=$connection->query($query); // esegue la query precedente

    foreach($data as $row){



    ?>
    <div class="col-sm-auto">
      <div class="card">
      <?php echo '<img src="data:image/png;base64,'.base64_encode($row["img"]).'" class="card-img-top" alt="immagine case">'?>
        <div class="card-body">
          <h5 class="card-title"><?php echo $row["title"]?></h5>
          <ul class="spec">
            <li class="testo"><?php echo $row["CPU"]?></li>  
            <li class="testo"><?php echo $row["HD"]?></li>
            <li class="testo"><?php echo $row["RAM"]?></li> 
            <li class="testo"><?php echo $row["Video"]?></li>


          </ul>
          <a href="../PC/pc4.php" class="btn btn-primary"><?php echo $row["Prezzo"]."€"?></a>
        </div>
      </div>
    </div>
    <!-- CARICO PC 5 DAL DATABASE -->
    <?php
    }
    $query="SELECT * FROM `PC` WHERE id=5";

    $data=$connection->query($query); // esegue la query precedente

    foreach($data as $row){



    ?>
    <div class="col-sm-auto">
      <div class="card">
      <?php echo '<img src="data:image/png;base64,'.base64_encode($row["img"]).'" class="card-img-top" alt="immagine case">'?>
        <div class="card-body">
          <h5 class="card-title"><?php echo $row["title"]?></h5>
          <ul class="spec">
            <li class="testo"><?php echo $row["CPU"]?></li>  
            <li class="testo"><?php echo $row["HD"]?></li>
            <li class="testo"><?php echo $row["RAM"]?></li> 
            <li class="testo"><?php echo $row["Video"]?></li>

          </ul>
          <a href="../PC/pc5.php" class="btn btn-primary"><?php echo $row["Prezzo"]."€"?></a>
        </div>
      </div>
    </div>
    <!-- CARICO PC 6 DAL DATABASE -->
    <?php
    }
    $query="SELECT * FROM `PC` WHERE id=6";

    $data=$connection->query($query); // esegue la query precedente

    foreach($data as $row){

    ?>
    <div class="col-sm-auto">
      <div class="card">
      <?php echo '<img src="data:image/png;base64,'.base64_encode($row["img"]).'" class="card-img-top" alt="immagine case">'?>
        <div class="card-body">
          <h5 class="card-title" class="testo"><?php echo $row["title"]?></h5>
          <ul class="spec">
            <li class="testo"><?php echo $row["CPU"]?></li>  
            <li class="testo"><?php echo $row["HD"]?></li>
            <li class="testo"><?php echo $row["RAM"]?></li> 
            <li class="testo"><?php echo $row["Video"]?></li>

          </ul>
          <a href="../PC/pc6.php" class="btn btn-primary"><?php echo $row["Prezzo"]."€"?></a>
        </div>
      </div>
    </div>
</div>    
    <?php }?> 


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>
