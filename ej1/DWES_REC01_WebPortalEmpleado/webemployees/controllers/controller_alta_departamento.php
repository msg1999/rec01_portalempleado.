<?php
    require_once ('../models/model_alta_departamento.php');
    include_once("../views/view_alta_departamento.php");

    function dar_alta_departamento($dept_no,$dept_name){
        alta_departamento($dept_no,$dept_name);
    }
?>