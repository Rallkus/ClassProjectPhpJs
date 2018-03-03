var email="";
var username="";
var password="";
var data="";
var dataTosend="";
var caract="";
var check=true;
$(document).ready(function () {
try{
  var submit = document.getElementById('create');

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
    dataTosend='email='+email+'&username='+username+'&password='+password;
      $.ajax({
        type: "POST",
        url: "module/login/controller/controller_login.php?op=created",
        data: dataTosend,
        datatype :'json',
        success: function(data){
          console.log(data);
          var json = JSON.parse(data);
          if(json.username){
            document.getElementById('error_username').innerHTML = "Este nombre de usuario ya está en uso";
            check=false;
          }
          if(json.email){
            document.getElementById('error_email').innerHTML = "Este email ya está en uso";
            check=false;
          }
          if(check==true){
            alert("La cuenta ha sido creada");
            window.location.href = "index.php?page=controller_login&op=login";
          }

        }
  });}
  }
  }
  catch(err){
  }
  });
