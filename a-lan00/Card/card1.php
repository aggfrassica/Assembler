<html>
<head>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- CSS styles -->
  <link rel="stylesheet" type="text/css" href="../css/style.css"> <!-- Non funziona con il resto dello stile -->
  <link rel="stylesheet" href="../css/card.css">
</head>
<body>
<?php 
  include(__DIR__ .'/../php_Assembler/connection.php');

  $query="SELECT * FROM `PC` WHERE id=1";

$data=$connection->query($query); // esegue la query precedente


  ?>