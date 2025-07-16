<div class="bg-primary position-relative">
  <div class="overlay-gradient"></div>
  <div class="container position-relative">
  	<div class="row py-5">
    	<div class="col">
        <h1 class="display-1">Generador QR Digitcard</h1>
        <p>Abajo tiene varias opciones</p>

        <?php
        $dir_link=$_POST['dir_link'];
        echo $dir_link;
        ?>

<div  >
 <form action="../../../process/upload_video.php" target="_blank" method="post">
              <input type="hidden" name="dir_link" value="<?php echo $dir_link; ?>"/>
             <input type="submit" class="btn btn-primary btn-lg shadow"  value="Suba un Video y copie url abajo en link para generar codigo " id="btnSend">
 </form>

        </div>
           </div>
    </div>
  </div>
</div>