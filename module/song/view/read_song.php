<div id="contenido">
    <h1>Informacion del Usuario</h1>
    <p>
    <table border='2'>
        <tr>
            <td>Nombre canción: </td>
            <td>
                <?php
                    if(isset($song['nombre_cancion'])){
                      echo $song['nombre_cancion'];
                    }
                    else {
                      echo "";
                    }
                ?>
            </td>
        </tr>

        <tr>
            <td>Álbum: </td>
            <td>
                <?php
                if(isset($song['album'])){
                  echo $song['album'];
                }
                else {
                  echo "";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td>Fecha de publicación: </td>
            <td>
                <?php
                if(isset($song['fecha_publicacion_cancion'])){
                  echo $song['fecha_publicacion_cancion'];
                }
                else {
                  echo "";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td>Genero: </td>
            <td>
                <?php
                if(isset($song['genero'])){
                  echo $song['genero'];
                }
                else {
                  echo "";
                }
                ?>
            </td>
        </tr>


        <tr>
            <td>Idioma: </td>
            <td>
                <?php
                if(isset($song['idioma_cancion'])){
                  echo $song['idioma_cancion'];
                }
                else {
                  echo "";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td>Grupo: </td>
            <td>
                <?php
                if(isset($song['grupo'])){
                  echo $song['grupo'];
                }
                else {
                  echo "";
                }
                ?>
            </td>

        </tr>

        <tr>
            <td>País: </td>
            <td>
                <?php
                if(isset($song['pais_grupo'])){
                  echo $song['pais_grupo'];
                }
                else {
                  echo "";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td>Instrumento: </td>
            <td>
                <?php
                if(isset($song['instrumentos_grupo'])){
                  echo $song['instrumentos_grupo'];
                }
                else {
                  echo "";
                }
                ?>
            </td>
        </tr>

        <tr>
            <td>Link: </td>
            <td>
                <?php
                if(isset($song['link_youtube_cancion'])){
                  echo $song['link_youtube_cancion'];
                }
                else {
                  echo "";
                }
                ?>
            </td>
        </tr>
    </table>
    </p>
    <p><a href="index.php?page=controller_song&op=list">Volver</a></p>
</div>
