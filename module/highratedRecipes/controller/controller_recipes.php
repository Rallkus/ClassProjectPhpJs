<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/Taste/';
    include($path . "module/highratedRecipes/model/DAORecipe.php");
    //include ("module/recipe/model/DAORecipe.php");
    //session_start();

    switch($_GET['op']){
        case 'list';
            try{
                $daorecipe = new DAORecipe();
            	$rdo = $daorecipe->select_all_recipes();
            }catch (Exception $e){
                $callback = 'index.php?page=503';
            }

            if(!$rdo){
    			$callback = 'index.php?page=503';
          //echo "$_POST";
          //echo "$rdo";
			    die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/highratedRecipes/view/list_recipe.php");
    		}
            break;
            case 'read_modal';
                    //echo $_GET["modal"];
                    //exit;

                    try{
                        $daorecipe = new DAORecipe();
                    	$rdo = $daorecipe->select_recipe($_GET['modal']);
                    }catch (Exception $e){
                        echo json_encode("error");
                        exit;
                    }
                    if(!$rdo){
            			echo json_encode("error");
                        exit;
            		}else{
            		    $recipe=get_object_vars($rdo);
                        echo json_encode($recipe);
                        //echo json_encode("error");
                        exit;
            		}
                    break;



        //default;
            //include("view/inc/error404.php");
          //  break;

    }
