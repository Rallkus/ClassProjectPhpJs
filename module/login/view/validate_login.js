var email="";
var username="";
var password="";
var data="";
var dataTosend="";
var caract="";
var check=true;
$(document).ready(function () {

    try{
      var submit = document.getElementById('login');

      submit.onclick = function() {
        check=true;
        username = $("#username").val();
        if(username == ""){
          document.getElementById('error_username').innerHTML = " No has introducido un username";
          check=false;
        }else{
          document.getElementById('error_username').innerHTML = "";
        }
        password = $("#password").val();
        if(password == ""){
          document.getElementById('error_password').innerHTML = " No has introducido un password";
          check=false;
        }else{
          document.getElementById('error_password').innerHTML = "";
        }
        if(check==true){
        dataTosend='username='+username+'&password='+password;
          $.ajax({
            type: "POST",
            url: "module/login/controller/controller_login.php?op=log",
            data: dataTosend,
            datatype :'json',
            success: function(data){
              console.log(data);
              var json = JSON.parse(data);
              if(!json.username){
                if(!json.user){
                  window.location.href = "index.php?page=homepage";
                  exit();
                }else{
                  document.getElementById('error_username').innerHTML="El nombre de usuario y la contraseña no coinciden"
                }
              }else{
                document.getElementById('error_username').innerHTML="El nombre de usuario no existe"
              }


            }
      });}
      }
      }
      catch(err){
      }

	});
