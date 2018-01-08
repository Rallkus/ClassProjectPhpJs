<?php
function validate_song($texto){
    if(!isset($texto) || empty($texto)){
        return false;
    }else{
        return true;
    }
}

function validate_album($texto){
    if(empty($texto)){
        return false;
    }else{
        return true;
    }
}
function validate_fecha($texto){
    if(empty($texto)){
        return false;
    }else{
        return true;
    }
}

function validate_genero($texto){
    if(!isset($texto) || empty($texto)){
        return false;
    }else{
        return true;
    }
}
function validate_idioma($texto){
    if(!isset($texto) || empty($texto)){
        return false;
    }else{
        return true;
    }
}
function validate_grupo($texto){
    if(empty($texto)){
        return false;
    }else{
        return true;
    }
}

function validate_pais($texto){
    if(!isset($texto) || empty($texto)){
        return false;
    }else{
        return true;
    }
}
function validate_instrumento($texto){
    if(!isset($texto) || empty($texto)){
        return false;
    }else{
        return true;
    }
}
function validate_link($texto){
    if(empty($texto)){
        return false;
    }else{
        return true;
    }
}



    function validate(){
        $check='';
        $check='True';
        print_r($check);

        $error=array();

        $v_song=$_POST['nom_cancion'];
        $v_album=$_POST['album'];
        $v_fecha=$_POST['fecha_publicacion'];
        if(isset($_POST['genero'])){
          $v_genero=$_POST['genero'];
        }else{
          $v_genero="";
        }
        if(isset($_POST['idioma'])){
          $v_idioma=$_POST['idioma'];
        }else{
          $v_idioma="";
        }
        $v_grupo=$_POST['grupo'];
        $v_pais=$_POST['pais'];
        if(isset($_POST['instrumento'])){
          $v_instrumentos=$_POST['instrumento'];
        }else{
          $v_instrumentos="";
        }

        $v_link=$_POST['link'];

        $r_song=validate_song($v_song);
        $r_album=validate_album($v_album);
        $r_fecha=validate_fecha($v_fecha);
        $r_genero=validate_genero($v_genero);
        $r_idioma=validate_idioma($v_idioma);
        $r_grupo=validate_grupo($v_grupo);
        $r_pais=validate_pais($v_pais);
        $r_instrumentos=validate_instrumento($v_instrumentos);
        $r_link=validate_link($v_link);

        if(!$r_song){
            $error_song = " No has introducido una canción ";
            $check=False;
        }else{
            $error_song = "";
        }
        if(!$r_album){
            $error_album = " No has introducido un álbum";
            $check=False;
        }else{
            $error_album = "";
        }
        if(!$r_fecha){
            $error_fecha = " No has introducido una fecha";
            $check=False;
        }else{
            $error_fecha = "";
        }
        if(!$r_genero){
            $error_genero = " No has introducido un género";
            $check=False;
        }else{
            $error_genero = "";
        }
        if(!$r_idioma){
            $error_idioma = " No has introducido un idioma";
            $check=False;
        }else{
            $error_idioma = "";
        }
        if(!$r_grupo){
            $error_grupo = " No has introducido un grupo";
            $check=False;
        }else{
            $error_grupo = "";
        }
        if($r_pais !== 1){
            $error_pais = " No has introducido un país";
            $check=False;
        }else{
            $error_pais = "";
        }
        if(!$r_instrumentos){
            $error_instrumentos = " No has introducido ningún instrumento";
            $check=False;
        }else{
            $error_instrumentos = "";
        }
        if(!$r_link){
            $error_link = " No has introducido un link";
            $check=False;
        }else{
            $error_link = "";
        }
        $error = array(
          'nom_cancion' => $error_song,
          'album' => $error_album,
          'fecha_publicacion' => $error_fecha,
          'genero' => $error_genero,
          'idioma' => $error_idioma,
          'grupo' => $error_grupo,
          'pais' => $error_pais,
          'instrumento' =>$error_instrumentos,
          'link' => $error_link
                        );
        $val=true;
        if(!$r_song || !$r_album || !$r_fecha || !$r_genero || !$r_idioma || !$r_grupo || !$r_pais || !$r_instrumentos || !$r_link){
            $val=false;
        }
        $resultado=array('resultado'=>$val , 'error'=>$error);
        print_r($resultado);
        return $resultado;

        //return $check;
    }
