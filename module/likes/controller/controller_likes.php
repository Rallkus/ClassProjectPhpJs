<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/Taste/';
    include($path . "module/likes/model/DAOLikes.php");
    @session_start();
    switch($_GET['op']){
      case 'likes';
          try{
              $daolikes = new DAOLikes();
            $rdo = $daolikes->select_all_likes();
          }catch (Exception $e){
          }

          if(!$rdo){
      }else{
              include("module/likes/view/Likes.php");
      }
          break;
      break;
        default;
            include("view/inc/error404.php");
            break;

    }
