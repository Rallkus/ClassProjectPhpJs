var email="";
var username="";
var password="";
var data="";
var dataTosend="";
var check=true;
$(document).ready(function () {
try{
  var submit = document.getElementById('usernameButt');

  submit.onclick = function() {
    check=true;
    username = $("#username").val();
    if(username == ""){
      document.getElementById('error_username').innerHTML = " No has introducido un username";
      check=false;
    }else{
      document.getElementById('error_username').innerHTML = "";
    }
    if(check==true){
    dataTosend='username='+username;
      $.ajax({
        type: "POST",
        url: "module/profile/controller/controller_profile.php?op=change_name",
        data: dataTosend,
        datatype :'json',
        success: function(data){
          console.log(data);
          var json = JSON.parse(data);
          if(json){
            alert("El nombre de usuario ha sido actualizado");
            window.location.href = "index.php?page=homepage";
          }
          else{
            document.getElementById('error_username').innerHTML = "El nombre de usuario ya está en uso";
          }

        }
  });}
  }
  }
  catch(err){
  }
  });
