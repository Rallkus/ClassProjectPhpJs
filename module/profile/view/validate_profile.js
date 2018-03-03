var check=true;
var fecha ="";
var especialidades="";
var aficiones="";
var idioma="";
$(document).ready(function () {
    try{

      var submit = document.getElementById('profile');

      submit.onclick = function() {
        aficiones = $('input[type=checkbox]:checked').map(function(_, el) {
          return $(el).val();
      }).get();
        check=true;
        especialidades = $('#especialidades').val();
        fecha = $("#fecha_nacimiento").val();
        idioma = $("#idioma option:selected").text();

        if(check==true){
        dataTosend='fecha='+fecha+'&especialidades='+especialidades+'&aficiones='+aficiones+'&idioma='+idioma;
          $.ajax({
            type: "POST",
            url: "module/profile/controller/controller_profile.php?op=profile",
            data: dataTosend,
            datatype :'json',
            success: function(data){
              console.log(data);
              var json = JSON.parse(data);
              if(json === false){
                alert("Actualizado en la base de datos");
                window.location.href = "index.php?page=homepage";
                exit();
              }else{
                alert("Algo va mal en la base de datos, prueba en unos momentos");
              }

            }
      });}
      }
      }
      catch(err){
      }

	});
