<?php

$path = $_SERVER['DOCUMENT_ROOT'] . '/Taste/';
include($path . "module/cocina/model/DAOCocina.php");
  switch($_GET['op']){
    case 'list';
        try{
          $daococina = new DAOCocina();
          $rdo = $daococina->select_all_cocina();
        }catch (Exception $e){
        }
            include("module/cocina/view/list_cocina.php");
        break;
        case 'like';
            try{
              $error=true;
              $daococina = new DAOCocina();
              $rdo = $daococina->select_like($_POST['id']);
              if($rdo){
                $error = false;
              }
              echo !$rdo;
              if($error){
              }else{
                $rdo = $daococina->delete_like($_POST['id']);
                $rdo = $daococina->insert_like($_POST['id']);
              }

            }catch (Exception $e){
            }
            break;
        case 'carrito';
        @session_start();
        if(isset($_SESSION['user'])){
          include("module/cocina/view/list_carrito.php");
        }else{
          include("view/inc/error404.php");
        }

        break;
        case 'comprar';
        $i=0;
        foreach($_POST['cart'] as $item){
          if($item['Qty']>0){
            $datos[$i]=$item;
          }
          $i = $i+1;
      }
      if(isset($datos) && sizeof($datos)>0){
          $daococina = new DAOCocina();
          $rdo= $daococina -> insert_compra();
          $rdo= $daococina -> get_id_compra();
          $id=get_object_vars($rdo);
          foreach($datos as $item){
            $conexion = connect::con("taste");
            $item['id']=$id;
            $rdo= $daococina -> insert_linea($item);
            $rdo= $daococina -> update_linea($item);
            connect::close($conexion);}
        }

        break;
        default;
            include("view/inc/error404.php");
            break;

    }
