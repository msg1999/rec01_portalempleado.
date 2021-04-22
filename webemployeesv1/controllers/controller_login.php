<?php
    require_once ('../models/model_login.php');

    session_start();

    if (!isset($_SESSION['id'])){
        if (isset($_POST) && !empty($_POST) && !isset($_SESSION['id'])){
            $idUsuario = obtenerAcceso($_POST['usuario'],$_POST['clave']);
            if (validarActual($idUsuario["emp_no"])==true) {
                $_SESSION['id']=$idUsuario['emp_no'];
                if (validarActual($idUsuario["emp_no"])['dept_no']=='d003'){
                    $_SESSION['human']=true;
                    header("location: controller_show_human.php");
                }
                else{
                    $_SESSION['human']=false;
                    header("location: controller_show.php");
                }
            }
            else if ($idUsuario == null) {
                echo "Email o contraseña erroneos";
            }
        } 
    }

    else{
        if ($_SESSION['human']==true)
            header("location: controller_show_human.php");
        else
            header("location: controller_show.php");

    }

    include_once("../views/view_login.php");

?>