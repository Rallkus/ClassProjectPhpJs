function validate_song(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}
function validate_album(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}
function validate_fecha(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}
/*function validate_genero(texto){
  if (texto.length > 0){
      return true;
  }
  return false;
}*/

/*function validate_idioma(array){
    var check=false;
    for ( var i = 0, l = array.options.length, o; i < l; i++ ){
        o = array.options[i];
        if ( o.selected ){
            check= true;
        }
    }
    return check;
}*/
function validate_grupo(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}
function validate_pais(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_link(texto){
    if (texto.length > 0){

      var reg=/^['https://www.youtube.com/watch?v=']/;
        return reg.test(texto);
    }
    return false;
}







function validate(){/*
  alert("hola");
        var check=true;

        var v_song=document.getElementById('nom_cancion').value;
        var v_album=document.getElementById('album').value;
       var v_fecha=document.getElementById('fecha').value;
       var v_grupo=document.getElementById('grupo').value;
       var v_pais=document.getElementById('pais').value;
       var v_link=document.getElementById('link').value;

       var r_song=validate_song(v_song);
       var r_album=validate_album(v_album);
      var r_fecha=validate_fecha(v_fecha);
      var r_grupo=validate_grupo(v_grupo);
      var r_pais=validate_pais(v_pais);
      var r_link=validate_link(v_link);
      alert(!r_song);
      if(!r_song){
          document.getElementById('error_cancion').innerHTML = " No has introducido una canción";
          check=false;
          alert("song");
      }else{
          document.getElementById('error_cancion').innerHTML = "";
      }

    alert("he sudado de todos los errores");
    if(!r_album){
        document.getElementById('error_album').innerHTML = " No has introducido un álbum";
        check=false;
        alert("album");
    }else{
        document.getElementById('error_album').innerHTML = "";
    }
    if(!r_fecha){
        document.getElementById('error_fecha').innerHTML = " No has introducido una fecha";
        check=false;
        alert("fecha");
    }else{
        document.getElementById('error_fecha').innerHTML = "";
    }
    if(!r_grupo){
        document.getElementById('error_grupo').innerHTML = " No has introducido un grupo";
        check=false;
        alert("grupo");
    }else{
        document.getElementById('error_grupo').innerHTML = "";
    }
    if(!r_pais){
        document.getElementById('error_pais').innerHTML = "No has introducido un país";
        check=false;
        alert("pais");
    }else{
        document.getElementById('error_pais').innerHTML = "";
    }
    if(!r_link){
        document.getElementById('error_link').innerHTML = "No has introducido un link";
        check=false;
        alert("link");
    }else{
        document.getElementById('error_link').innerHTML = "";
    }

    return check;*/
    return true;

}
