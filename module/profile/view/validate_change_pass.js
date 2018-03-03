var email="";
var username="";
var password="";
var data="";
var dataTosend="";
var oldPass="";
var check=true;
$(document).ready(function () {
try{
  var submit = document.getElementById('change_pass');

  submit.onclick = function() {
    check=true;
    oldPass = $("#oldPass").val();
    password = $("#pass").val();
    if(oldPass == ""){
      document.getElementById('error_oldPass').innerHTML = " No has introducido una contraseña";
      check=false;
    }else{
      document.getElementById('error_oldPass').innerHTML = "";
    }
    if(password == ""){
      document.getElementById('error_pass').innerHTML = " No has introducido una contraseña";
      check=false;
    }else{
      document.getElementById('error_pass').innerHTML = "";
    }
    if(check===true){
    dataTosend='oldPass='+oldPass+'&password='+password;
      $.ajax({
        type: "POST",
        url: "module/profile/controller/controller_profile.php?op=change_password",
        data: dataTosend,
        datatype :'json',
        success: function(data){
          console.log(data);
          var json = JSON.parse(data);
          if(!json){
            alert("La contraseña ha sido actualizada");
            window.location.href = "index.php?page=homepage";
          }
          else{
            document.getElementById('error_oldPass').innerHTML = " La contraseña no coincide con la actual";
          }

        }
  });}
  }
  }
  catch(err){
  }
  });
