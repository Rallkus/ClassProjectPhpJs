<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/Taste/';
    include($path . "module/profile/model/DAOProfile.php");
    @session_start();
    switch($_GET['op']){
      case 'profile';
      $error=false;
      if(isset($_SESSION['user'])){
        if(isset($_POST['especialidades'])){
          try{


          $daoprofile = new DAOProfile();
          $rdo= $daoprofile -> update_profile($_POST);
          @session_start();
          $_SESSION['user']['fecha_nacimiento']=$_POST['fecha'];
          $_SESSION['user']['aficiones']=$_POST['aficiones'];
          $_SESSION['user']['especialidades']=$_POST['especialidades'];
          $_SESSION['user']['idioma']=$_POST['idioma'];
        }catch(Exception $e){
          $error=true;
        }
      echo json_encode($error);}else{
          include("module/profile/view/profile.php");
        }

      }else{
        include("view/inc/error404.php");
      }

      break;
      case 'change_name';
      if(isset($_SESSION['user'])){
      $error=true;
      if(isset($_POST['username'])){
        $daoprofile = new DAOProfile();
        $rdo= $daoprofile -> select_username($_POST['username']);
        if($rdo){
          $error=false;
        }
        if($error){
          try{
            $daoprofile -> update_username($_POST['username']);
            $_SESSION['user']['username']=$_POST['username'];
          }catch(Exception $e){
            $error=false;
          }

        }
        echo json_encode($error);
      }else{
        include("module/profile/view/change_name.php");
      }}else{
        include("view/inc/error404.php");
      }
      break;
      case 'change_email';
      if(isset($_SESSION['user'])){
      $error=true;
      if(isset($_POST['email'])){
        $daoprofile = new DAOProfile();
        $rdo= $daoprofile -> select_email($_POST['email']);
        if($rdo){
          $error=false;
        }
        if($error){
          try{
            $daoprofile -> update_email($_POST['email']);
            $_SESSION['user']['email']=$_POST['email'];
          }catch(Exception $e){
            $error=false;
          }

        }
        echo json_encode($error);
      }else{
        include("module/profile/view/change_email.php");
      }}else{
        include("view/inc/error404.php");
      }
      break;
      case 'change_password';
      if(isset($_SESSION['user'])){
      $error = true;
      if(isset($_POST['oldPass'])){
        $daoprofile = new DAOProfile();
        $rdo= $daoprofile -> select_user($_POST['oldPass']);
        if($rdo){
          $error=false;
        }
        if($error){
          try{
            $daoprofile -> update_password($_POST['password']);
          }catch(Exception $e){
            $error=false;
          }

        }
        echo json_encode($error);
      }else{
        include("module/profile/view/change_pass.php");
      }}else{
        include("view/inc/error404.php");
      }
      break;
        default;
            include("view/inc/error404.php");
            break;

    }
