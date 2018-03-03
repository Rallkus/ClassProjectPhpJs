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
        case 'carrito';
        include("module/cocina/view/list_carrito.php");
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
            echo $rdo;
            $rdo= $daococina -> update_linea($item);
            connect::close($conexion);}
        }

        break;
        default;
            include("view/inc/error404.php");
            break;

    }
