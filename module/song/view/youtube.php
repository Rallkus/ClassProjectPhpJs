<div class="contenido">

<?php
  if(isset($song['link_youtube_cancion'])){
      $link='';
      for ($i=0; $i < strlen($song['link_youtube_cancion']); $i++) {
        if($i<23){
          $link=$link . $song['link_youtube_cancion'][$i];
        }else if($i == 24){
          $link=$link . "/embed/";
        }else if($i >= 32){
          $link=$link . $song['link_youtube_cancion'][$i];
        }

      }
  }

 ?>
  <iframe width="560" height="315" src=<?php echo $link ?> frameborder="0" allowfullscreen></iframe>
  <br>
  <a href="index.php?page=controller_song&op=list">Volver</a>

 </div>
