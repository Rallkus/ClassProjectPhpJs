$(document).ready(function () {
        $('.like').click(function () {
            var id = this.getAttribute('id');
            //alert(id);

			$.get("module/likes/controller/controller_likes.php?op=read_modal&modal=" + id, function (data, status) {
                var json = JSON.parse(data);
                console.log(json);

                if(json === 'error') {
                  alert("hola");
                    //console.log(json);
                    //pintar 503
    			    window.location.href='index.php?page=503';
                }else{
                    var time = json.estimated_time;
                    var str= time.split('.');
                    var image="<img src='"+ json.image +"' alt='done'>";
                    time=str[0] + " hours "+ str[1]+ " minutes";

                    console.log(json.recipe);
                    $("#puntuation").html(json.puntuation);
                    $("#difficulty").html(json.difficult);
                    $("#name_recipe").html(json.name);
                    $("#number_persons").html(json.number_persons);
                    $("#time").html(time);
                    $("#vegan").html(json.vegan);
                    $("#description").html(json.description);
                    $("#instruction").html(json.instruction);
                    $("#image").html(image);

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
                            duration: 500
                        },
                        hide: {
                            effect: "explode",
                            duration: 500
                        }
                    });
                }//end-else
            });
        });
	});
