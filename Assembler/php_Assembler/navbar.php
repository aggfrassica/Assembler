<?php

echo ' <div class="topnav" id="myTopnav">
<a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
</a>
<a href="./../index.html">Home</a>
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
</script>';

?>