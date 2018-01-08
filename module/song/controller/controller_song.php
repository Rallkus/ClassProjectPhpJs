<?php
    include ("module/song/model/DAOSong.php");
    //session_start();

    switch($_GET['op']){
        case 'list';
            try{
                $daosong = new DAOSong();
            	$rdo = $daosong->select_all_songs();
            }catch (Exception $e){
                $callback = 'index.php?page=503';
            }

            if(!$rdo){
    			$callback = 'index.php?page=503';
          //echo "$_POST";
          //echo "$rdo";
			    die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/song/view/list_song.php");
    		}
            break;

        case 'create';
           include("module/song/model/validate_song.php");

            $check = true;

            /*$error = array(
                            'nom_cancion' => '',
                            'album' => '',
                            'fecha_publicacion' => '',
                            'genero' => '',
                            'idioma' => '',
                            'grupo' => '',
                            'pais' => '',
                            'instrumento' =>'',
                            'link' => ''
                    );*/
            if (isset($_POST['create'])){
              //$result['resultado']=true;
                $result=validate();


                //if ($check){
                if ($result['resultado']) {
                    $_SESSION['user']=$_POST;
                    try{
                        $daosong = new DAOSong();
                        $rdo = $daosong->insert_song($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
                        die('<script>window.location.href="'.$callback .'";</script>');
                    }

                    if($rdo){
                        echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
                        $callback = 'index.php?page=controller_song&op=list';
                        die('<script>window.location.href="'.$callback .'";</script>');
                    }else{
                        $callback = 'index.php?page=503';
                        die('<script>window.location.href="'.$callback .'";</script>');
                    }
                }
                else {
                    $error = $result['error'];
                }
            }
            include("module/song/view/create_song.php");
            break;

        case 'update';
              include("module/song/model/validate_song.php");

            $check = true;
            /*$error = array(
                            'nom_cancion' => '',
                            'album' => '',
                            'fecha_publicacion' => '',
                            'genero' => '',
                            'idioma' => '',
                            'grupo' => '',
                            'pais' => '',
                            'instrumento' =>'',
                            'link' => ''
                    );*/
            if (isset($_POST['update'])){
              //$result['resultado']=true;
              $result=validate();
              $error=$result['error'];
                //if ($check){
                if ($result['resultado']) {
                    $_SESSION['user']=$_POST;
                    try{
                        $daosong = new DAOSong();
    		            $rdo = $daosong->update_song($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }

		            if($rdo){
            			echo '<script language="javascript">alert("Actualizado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_song&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
                else {
                    $error = $result['error'];
                    $_SESSION['user']=$_POST;
                    $_GET['id']=$_POST['nom_cancion'];
                }
            }



            try{
                $daosong = new DAOSong();
            	$rdo = $daosong->select_song($_GET['id']);
            	$user=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }

            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{

                $id=$_GET['id'];
        	    include("module/song/view/update_song.php");
    		}
            break;

        case 'read';
            try{
                $daosong = new DAOSong();
            	$rdo = $daosong->select_song($_GET['id']);
            	$song=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/song/view/read_song.php");
    		}
            break;

        case 'delete';
            if (isset($_POST['delete'])){
                try{
                    $daosong = new DAOSong();
                	$rdo = $daosong->delete_song($_GET['id']);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }

            	if($rdo){
        			echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
        			$callback = 'index.php?page=controller_song&op=list';
    			    die('<script>window.location.href="'.$callback .'";</script>');
        		}else{
        			$callback = 'index.php?page=503';
			        die('<script>window.location.href="'.$callback .'";</script>');
        		}
            }

            include("module/song/view/delete_song.php");
            break;

            case 'deleteAll';
                if (isset($_POST['deleteAll'])){
                    try{
                        $daosong = new DAOSong();
                    	$rdo = $daosong->delete_all();
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }

                	if($rdo){
            			echo '<script language="javascript">alert("Borrado en la base de datos correctamente")</script>';
            			$callback = 'index.php?page=controller_song&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }

                include("module/song/view/delete_all.php");
                break;


            case 'youtube';
                try{
                    $daosong = new DAOSong();
                	$rdo = $daosong->select_song($_GET['id']);
                	$song=get_object_vars($rdo);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }
                if(!$rdo){
        			$callback = 'index.php?page=503';
        			die('<script>window.location.href="'.$callback .'";</script>');
        		}else{
                    include("module/song/view/youtube.php");
        		}
                break;



        default;
            include("view/inc/error404.php");
            break;

    }
