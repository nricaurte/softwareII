<!DOCTYPE html>
<html lang="en">
    <head>

      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
      <title>Tecnology Advance</title>
	<link rel="stylesheet" type="text/css" href="/TecnologyAdvance/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/TecnologyAdvance/css/estilos.css">
	<link rel="stylesheet" type="text/css" href="/TecnologyAdvance/css/font.css">
    <script type="text/javascript" src="/TecnologyAdvance/js/jquery-1.11.2.min.js"></script>
</head>
<body>
<div class="container">
	<center> <img src='../img/logo.png'></img></center>
	</div>
 <section>
<div class="container">
<div class="row">
    <div class="col-md-12">    
          <div class="main">
            <div class="slides">
              <img class="img-responsive " src="/TecnologyAdvance/img/img1.jpg" alt="">
              <img class="img-responsive "  src="/TecnologyAdvance/img/img2.jpg"alt="">
              <img class="img-responsive "  src="/TecnologyAdvance/img/img4.jpg" alt="">
            </div>
          </div>
    </div> 
</div>
</div>
 </section>

<div class="container">
	<div class="row">

	<?php echo $contenido ?>
	</div>
</div>

 <footer class="panel-footer "> 
 	<div class="container">
 		<div class="row">
 			<h3>Tecnology Advance</h3>
	      <hr>
 		</div>
 	</div>
 
</footer>

<script type="text/javascript" src="/TecnologyAdvance/js/bootstrap.mim.js"></script>
<script type="text/javascript" src="/TecnologyAdvance/js/jquery.slides.js"></script>  

  <script>
  $(function(){
  $(".slides").slidesjs({
    play: {
      active: true,
        // [boolean] Generate the play and stop buttons.
        // You cannot use your own buttons. Sorry.
      effect: "slide",
        // [string] Can be either "slide" or "fade".
      interval: 5000,
        // [number] Time spent on each slide in milliseconds.
      auto: true,
        // [boolean] Start playing the slideshow on load.
      swap: true,
        // [boolean] show/hide stop and play buttons
      pauseOnHover: false,
        // [boolean] pause a playing slideshow on hover
      restartDelay: 2500
        // [number] restart delay on inactive slideshow
    }
  });
});
  </script>
</body>
</html>