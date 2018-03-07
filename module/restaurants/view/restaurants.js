var Api_key="b_jBXyyQ8t_HDQU7p567hGraMA2sSOB3PMNiiXsbSHmiYkqngfA-LIH-I30UX2gOON74M-uTQGy1FTQr0oE7cyCsTlqFL8oknp_Iy6BkUdi7bPzObW2et0-8TqVPWXYx";
var ciudad="";
var businesses=[];
var info = [];
var info2 = [];
function call_api(city){
  $.ajax({
    //type: "GET",
    url: "https://api.yelp.com/v3/businesses/search?location="+city,
    headers:{
      "Authorization" : "Bearer "+Api_key
    },
    success: function(data){
      var a = Object.values(data.businesses);
      console.log(a);
      businesses=[];
      info = [];
      info2 = [];
      a.forEach(function(element) {
      businesses.push(element.name);
      info2.push(element.id);
      info2.push(element.image_url);
      info2.push(element.name);
      info2.push(element.display_phone);
      info2.push(element.rating);
      var i=0;
      var j = Object.values(element.location);
      j.forEach(function(address){
        if(i==0){
          info2.push(address);
        }
        i=1;
      })
      info.push(info2);
      info2 = [];
});
console.log(info);
$( function() {
    var availableTags = businesses;
    $( "#tags" ).autocomplete({
      source: availableTags,
      autofocus : true,
      select : function(a,event){
        info.forEach(function(something){
          if(something[2] == event.item.value){
            console.log(something[2]);
            var image="<img src='"+ something[1] +"' alt='No image available'>";
            $("#name").html(something[2]);
            $("#address").html(something[5]);
            $("#phone").html(something[3]);
            $("#rating").html(something[4]);
            $("#image").html(image);

            $("#details_restaurant").show();
            $("#api_modal").dialog({
                width: 850, //<!-- ------------- ancho de la ventana -->
                height: 1000, //<!--  ------------- altura de la ventana -->
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
          }

        })
      }
    });
  } );
console.log(businesses);
    }
  });
}
$(document).ready(function () {
$(".tags").hide();

  $("#cboComunidades").change(function() {
				var comunidad = $(this).val();

				if(comunidad == 1){
                    var $comboCiudades = $("#cboCiudades");
                $comboCiudades.empty();
                $comboCiudades.append("<option>Ontinyent</option>");
                $comboCiudades.append("<option>Valencia</option>");
                $comboCiudades.append("<option>Castellon</option>");
                ciudad = $("#cboCiudades").val();
                call_api(ciudad);
                $(".tags").show();

				}else if(comunidad == 2){
          var $comboCiudades = $("#cboCiudades");
                $comboCiudades.empty();
                $comboCiudades.append("<option>Madrid</option>");
                $comboCiudades.append("<option>Valdemoro</option>");
                $comboCiudades.append("<option>Parla</option>");
                ciudad = $("#cboCiudades").val();
                call_api(ciudad);
                $(".tags").show();

        }else if(comunidad == 3){
          var $comboCiudades = $("#cboCiudades");
                $comboCiudades.empty();
                $comboCiudades.append("<option>Barcelona</option>");
                $comboCiudades.append("<option>Sabadell</option>");
                ciudad = $("#cboCiudades").val();
                call_api(ciudad);
                $(".tags").show();

        }else{
					var $comboCiudades = $("#cboCiudades");
	                $comboCiudades.empty();
					$comboCiudades.append("<option>Seleccione un país</option>");
          $(".tags").hide();
				}
			});

      $("#cboCiudades").change(function() {
    				ciudad = $(this).val();
            call_api(ciudad);
    			});



})
