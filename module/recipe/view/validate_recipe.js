function validate_puntuation(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}
function validate_difficulty(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}

function validate_recipe(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}
function validate_number_of_persons(texto){
  if (texto.length > 0){
      return true;
  }
  return false;
}
function validate_hour(texto){
    if (texto != 0){
        return true;
    }
    return false;
}
function validate_min(texto){
    if (texto != 0){
        return true;
    }
    return false;
}
function validate_vegan(texto){
  if (texto.length > 0){
      return true;
  }
  return false;
}
function validate_description(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}
function validate_instruction(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}
function validate_image(texto){
    if (texto.length > 0){
        return true;
    }
    return false;
}







function validate(){
        var check=true;

        var v_puntuation=document.getElementById('puntuation').value;
        var v_difficulty=document.getElementById('difficulty').value;
       var v_name_recipe=document.getElementById('name_recipe').value;
       var v_number_of_persons=document.getElementById('number_of_persons').value;
       var v_hour=document.getElementById('hour').value;
       var v_min=document.getElementById('min').value;
       var v_vegan=document.getElementById('vegan').value;
       var v_description=document.getElementById('description').value;
       var v_instruction=document.getElementById('instruction').value;
       var v_image=document.getElementById('image').value;

       var r_puntuation=validate_puntuation(v_puntuation);
       var r_difficulty=validate_difficulty(v_difficulty);
      var r_name_recipe=validate_recipe(v_name_recipe);
      var r_number_of_persons=validate_number_of_persons(v_number_of_persons);
      var r_hour=validate_hour(v_hour);
      var r_min=validate_min(v_min);
      var r_vegan=validate_vegan(v_vegan);
      var r_description=validate_description(v_description);
      var r_instruction=validate_instruction(v_instruction);
      var r_image=validate_image(v_image);
      if(!r_puntuation){
          document.getElementById('error_puntuation').innerHTML = " No has introducido una puntuación";
          check=false;
      }else{
          document.getElementById('error_puntuation').innerHTML = "";
      }
    if(!r_difficulty){
        document.getElementById('error_difficulty').innerHTML = " No has introducido una dificultad";
        check=false;
    }else{
        document.getElementById('error_difficulty').innerHTML = "";
    }
    if(!r_name_recipe){
        document.getElementById('error_recipe').innerHTML = " No has introducido un nombre para la receta";
        check=false;
    }else{
        document.getElementById('error_recipe').innerHTML = "";
    }
    if(!r_number_of_persons){
        document.getElementById('error_persons').innerHTML = " No has introducido un número de personas suficiente para la receta";
        check=false;
    }else{
        document.getElementById('error_persons').innerHTML = "";
    }
    if((r_hour==false) && (r_min==false)){
        document.getElementById('error_time').innerHTML = " No puede hacerse una receta en 0 minutos!";
        check=false;
    }else{
        document.getElementById('error_time').innerHTML = "";
    }
    if(!r_vegan){
        document.getElementById('error_vegan').innerHTML = " No has introducido si la receta es vegana o no";
        check=false;
    }else{
        document.getElementById('error_vegan').innerHTML = "";
    }
    if(!r_description){
        document.getElementById('error_description').innerHTML = " No has introducido la descripción de la receta";
        check=false;
    }else{
        document.getElementById('error_description').innerHTML = "";
    }
    if(!r_instruction){
        document.getElementById('error_instruction').innerHTML = " No has introducido las instrucciones de la receta";
        check=false;
    }else{
        document.getElementById('error_instruction').innerHTML = "";
    }
    if(!r_image){
        document.getElementById('error_image').innerHTML = " No has introducido una imagen para la receta";
        check=false;
    }else{
        document.getElementById('error_image').innerHTML = "";
    }

    return check;
    //return true;

}

$(document).ready(function () {
        $('.recipe').click(function () {
            var id = this.getAttribute('id');
            //alert(id);

			$.get("module/recipe/controller/controller_recipe.php?op=read_modal&modal=" + id, function (data, status) {
                var json = JSON.parse(data);
                console.log(json);

                if(json === 'error') {
                  alert("hola");
                    //console.log(json);
                    //pintar 503
    			    window.location.href='index.php?page=503';
                }else{
                    console.log(json.recipe);
                    $("#puntuation").html(json.puntuation);
                    $("#difficulty").html(json.difficulty);
                    $("#name_recipe").html(json.name_recipe);
                    $("#number_of_persons").html(json.number_of_persons);
                    $("#time").html(json.time);
                    $("#vegan").html(json.vegan);
                    $("#description").html(json.description);
                    $("#instruction").html(json.instruction);
                    $("#image").html(json.image);

                    $("#details_recipe").show();
                    $("#recipe_modal").dialog({
                        width: 850, //<!-- ------------- ancho de la ventana -->
                        height: 500, //<!--  ------------- altura de la ventana -->
                        //show: "scale", <!-- ----------- animación de la ventana al aparecer -->
                        //hide: "scale", <!-- ----------- animación al cerrar la ventana -->
                        resizable: "false", //<!-- ------ fija o redimensionable si ponemos este valor a "true" -->
                        //position: "down",<!--  ------ posicion de la ventana en la pantalla (left, top, right...) -->
                        modal: "true", //<!-- ------------ si esta en true bloquea el contenido de la web mientras la ventana esta activa (muy elegante) -->
                        buttons: {
                            Ok: function () {
                                $(this).dialog("close");
                            }
                        },
                        show: {
                            effect: "blind",
                            duration: 1000
                        },
                        hide: {
                            effect: "explode",
                            duration: 1000
                        }
                    });
                }//end-else
            });
        });
	});
