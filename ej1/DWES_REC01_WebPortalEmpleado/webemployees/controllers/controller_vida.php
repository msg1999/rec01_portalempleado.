<?php
    require_once ('../models/model_vida.php');
    include_once("../views/view_vida.php");


    function departamentos($empleado){
        return(consultar_departamentos($empleado));
    }

    function datos($empleado){
        return(consultar_usuario($empleado));
    } 

    function salarios($empleado){
        return(consultar_salarios($empleado));
    }

    function titulos($empleado){
        return(consultar_titulos($empleado));
    }

    function obtener_dpt($dpt){
        return(obtener_departamento($dpt));
    }

?>