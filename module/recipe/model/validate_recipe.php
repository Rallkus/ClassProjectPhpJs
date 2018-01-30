<?php
function validate_puntuation($texto){
    if(!isset($texto) || empty($texto)){
        return false;
    }else{
        return true;
    }
}

function validate_difficulty($texto){
    if(!isset($texto) || empty($texto)){
        return false;
    }else{
        return true;
    }
}
function validate_recipe($texto){
    if(!isset($texto) || empty($texto)){
        return false;
    }else{
        return true;
    }
}
function validate_number_of_persons($texto){
    if(!isset($texto) || empty($texto)){
        return false;
    }else{
        return true;
    }
}
function validate_hour($texto){
    if(!isset($texto) || $texto == 0){
        return false;
    }else{
        return true;
    }
}
function validate_min($texto){
    if(!isset($texto) || $texto == 0){
        return false;
    }else{
        return true;
    }
}
function validate_vegan($texto){
    if(!isset($texto) || empty($texto)){
        return false;
    }else{
        return true;
    }
}
function validate_description($texto){
    if(!isset($texto) || empty($texto)){
        return false;
    }else{
        return true;
    }
}
function validate_instruction($texto){
    if(!isset($texto) || empty($texto)){
        return false;
    }else{
        return true;
    }
}
function validate_image($texto){
    if(!isset($texto) || empty($texto)){
        return false;
    }else{
        return true;
    }
}



    function validate(){

        $error=array();
        $val=true;
        $v_puntuation=$_POST['puntuation'];
        $v_difficulty=$_POST['difficulty'];
        $v_name_recipe=$_POST['name_recipe'];
        if(isset($_POST['number_of_persons'])){
          $v_number_of_persons=$_POST['number_of_persons'];
        }else{
          $v_number_of_persons="";
        }
        $v_hour=$_POST['hour'];
        $v_min=$_POST['min'];
        if(isset($_POST['vegan'])){
          $v_vegan=$_POST['vegan'];
        }else{
          $v_vegan="";
        }
        $v_description=$_POST['description'];
        $v_instruction=$_POST['instruction'];
        //$v_image=$_POST['image'];

        $r_puntuation=validate_puntuation($v_puntuation);
        $r_difficulty=validate_difficulty($v_difficulty);
        $r_name_recipe=validate_recipe($v_name_recipe);
        $r_number_of_persons=validate_number_of_persons($v_number_of_persons);
        $r_hour=validate_hour($v_hour);
        $r_min=validate_min($v_min);
        $r_vegan=validate_vegan($v_vegan);
        $r_description=validate_description($v_description);
        $r_instruction=validate_instruction($v_instruction);
        //$r_image=validate_image($v_image);

        if(!$r_puntuation){
            $error_puntuation = " No has introducido una puntuación ";
        }else{
            $error_puntuation = "";
        }
        if(!$r_difficulty){
            $error_difficulty = " No has introducido una dificultad";
        }else{
            $error_difficulty = "";
        }
        if(!$r_name_recipe){
            $error_name_recipe = " No has introducido una receta";
        }else{
            $error_name_recipe = "";
        }
        if(!$r_number_of_persons){
            $error_number_of_persons = " No has introducido una cantidad de personas";
        }else{
            $error_number_of_persons = "";
        }
          if(($r_hour==false) && ($r_min==false)){
            $error_time = " No puede hacerse una receta en 0 minutos!";
        }else{
            $error_time = "";
        }
        if(!$r_vegan){
            $error_vegan = " No has introducido si la receta es vegana";
        }else{
            $error_vegan = "";
        }
        if(!$r_description){
            $error_description = " No has introducido una cantidad de personas";
        }else{
            $error_description = "";
        }
        if(!$r_instruction){
            $error_instruction = " No has introducido las instrucciones de la receta";
        }else{
            $error_instruction = "";
        }
        /*if(!$r_image){
            $error_image = " No has introducido una imagen";
        }else{
            $error_image = "";
        }*/
        $error = array(
          'puntation' => $error_puntuation,
          'difficulty' => $error_difficulty,
          'name_recipe' => $error_name_recipe,
         'persons' => $error_number_of_persons,
          'time' => $error_time,
          'vegan' => $error_vegan,
          'description' => $error_description,
          'instruction' =>$error_instruction,
          //'image' => $error_image
                        );

        if(!$r_puntuation || !$r_difficulty || !$r_name_recipe || !$r_number_of_persons || ($error_time!="") || !$r_vegan || !$r_description || !$r_instruction/* || !$r_image*/){
                      $val=false;
        }


        $resultado=array('resultado'=>$val , 'error'=>$error);
      //  print_r($resultado);
      //  die();

        return $resultado;

    }
