<?php
    require_once ('../models/model_alta.php');
    include_once("../views/view_alta.php");


    function dar_alta_empleado($cumple,$nombre,$apellido,$genero,$salario,$cargo){
        $cod=generar_cod_emp()[0]['max(emp_no)']+1;
        var_dump($cod);
        $ahora=date('Y-m-d h:m:s');
        alta_emp($cod,$cumple,$nombre,$apellido,$genero,$ahora);
        alta_salario($cod,$salario,$ahora);
        alta_cargo($cod,$cargo,$ahora);
    }
?>
