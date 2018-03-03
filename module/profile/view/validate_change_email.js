var email="";
var username="";
var password="";
var data="";
var dataTosend="";
var check=true;
$(document).ready(function () {
try{
  var submit = document.getElementById('change_email');

  submit.onclick = function() {
    check=true;
    email = $("#email").val();
    caract = new RegExp(/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/);
    if(caract.test(email) == false){
      document.getElementById('error_email').innerHTML = " No has introducido un email válido";
      check=false;
    }
    else{
      document.getElementById('error_email').innerHTML = "";}
    if(check==true){
    dataTosend='email='+email;
      $.ajax({
        type: "POST",
        url: "module/profile/controller/controller_profile.php?op=change_email",
        data: dataTosend,
        datatype :'json',
        success: function(data){
          console.log(data);
          var json = JSON.parse(data);
          if(json){
            alert("El email ha sido actualizado");
            window.location.href = "index.php?page=homepage";
          }
          else{
            document.getElementById('error_email').innerHTML = "El email ya está en uso";
          }

        }
  });}
  }
  }
  catch(err){
  }
  });
