<?php

echo '<header class="sopra">
<div class="topnav" id="myTopnav">
	<a href="index.php" class="attivo">
		<img src="logo2.png" class="Hlogo" alt="logo">
	</a>
  
  <a href="index.php" class="attivo">Home</a>
  <a href="vetrina.php">Vetrina</a>
  <a href="about.php">About</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
</header>

<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>';


?>