<?php
    require_once ('../models/model_historial.php');
    include_once("../views/view_historial.php");

    function salarios($usuario){
        var_dump(consultar_salario($usuario));
    }
    function departamentos($usuario){
        var_dump(consultar_departamentos($usuario));
    }
?>