<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/Taste/';
    include($path . "module/login/model/DAOLogin.php");
    switch($_GET['op']){
        case 'log';
        try{
        if(!isset($_POST['username'])){
          include("view/inc/error404.php");
        }else{
        $daologin = new DAOLogin();
        $error = array('username' => true, 'user' => true,);
        $rdo= $daologin -> select_username($_POST['username']);
        if($rdo){
          $error['username']=false;
        }
        $rdo= $daologin -> select_user($_POST);
        if($rdo){
          $error['user']=false;
        }
        if($error['user']===false){
          $rdo= $daologin -> select_user_info($_POST);
          $user=get_object_vars($rdo);
          @session_start();
          $user['password']="";
          $_SESSION['user']=$user;
          /*echo $_SESSION['user']['username'];
          echo $_SESSION['user']['email'];
          echo $_SESSION['user']['type'];
          echo $_SESSION['user']['password'];*/

        }
        echo json_encode($error);
            }
    }catch (Exception $e){

    }
    break;
        case 'logout';

        if(isset($_POST['logout'])){
          @session_start();
          session_destroy();
          @session_start();
        }else{
          if(isset($_SESSION['user'])){
          include("module/login/view/logout.php");
        }else{
          include("view/inc/error404.php");
        }}
          break;
        case 'login';
        if(!isset($_SESSION['user']['type'])){
          include("module/login/view/login.php");
        }else{
          include("view/inc/error404.php");
        }

            break;
            case 'create';
                include("module/login/view/create_user.php");
                break;
            case 'created';
            try{
                if(!isset($_POST['username'])){
                  include("view/inc/error404.php");
                }else{
                $daologin = new DAOLogin();
                $error = array('username' => false, 'email' => false, );
                $rdo= $daologin -> select_username($_POST['username']);
                if($rdo){
                  $error['username']=true;
                }
                $rdo=$daologin -> select_email($_POST['email']);
                if($rdo){
                  $error['email']=true;
                }
                if(!($error['email'] || $error['username'])){
                  $rdo = $daologin->insert_user($_POST);
                }
                    echo json_encode($error);}
            }catch (Exception $e){

            }
            break;







        default;
            include("view/inc/error404.php");
            break;

    }
