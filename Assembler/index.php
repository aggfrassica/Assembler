<!DOCTYPE html>
<html lang="it">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Assembler</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/navbar.css">
        <link rel="stylesheet" href="./css/scroll.css">
        <link rel="stylesheet" href="./slick-1.8.1/slick/slick.css">
        <link rel="stylesheet" href="./slick-1.8.1/slick/slick-theme.css">
        <link rel="stylesheet" href="./css/textwriter.css">
        <link rel="stylesheet" href="./css/sliderimage.css">
        <link rel="stylesheet" href="./css/hvr_image.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:500&display=swap" rel="stylesheet">
    </head>
    
    <body>

      <?php include(__DIR__ .'/php_Assembler/navbar.php');?>
        
  <div class="one">
 <p class="line anim-typewriter">Assembla il tuo pc.</p>
</div>

    


        <div class="two" >

            

     
          <section class="slider-area slider">
             <div>
              <a href="./PC/pc1.php"><img src="./img/case2.jpg"></a>
            </div>
            <div>
              <a href="./PC/pc2.php"><img src="./img/case2.jpg"></a>
            </div>
            <div>
              <a href="./PC/pc3.php"><img src="./img/case3.jpg"></a>
            </div>
            <div>
              <a href="./PC/pc4.php"><img src="./img/case3.jpg"></a>
            </div>
            <div>
              <a href="./PC/pc5.php"><img  src="./img/case2.jpg"></a>
            </div>
            <div>
              <a href="./PC/pc6.php"><img src="./img/case2.jpg"></a>
            </div>
           
          </section>

</div>


<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="./slick-1.8.1/slick/slick.js" type="text/javascript" charset="utf-8"></script>



 <script>
  $(".slider-area").slick({
     dots: true,
     infinite: true,
     slidesToShow: 3,
     slidesToScroll: 5,
     autoplay:true,
     speed:1000,
     centerMode:true
     
   });
 </script>
 <div class="foot">
     <p>Email:gay@gay.com</p><br>
     <p>Cell:389256359</p>    
         </div>
        
       
    </body> 
</html>
