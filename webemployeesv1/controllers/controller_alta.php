<?php
    require_once ('../models/model_alta.php');

    if (isset($_POST['alta'])){
        $cumple=$_POST['birth-date'];
        $nombre=$_POST['first-name'];
        $apellido=$_POST['last-name'];
        $genero=$_POST['gender'];
        $salario=$_POST['salary'];
        $cargo=$_POST['cargo'];
        dar_alta_empleado($cumple,$nombre,$apellido,$genero,$salario,$cargo);
    }


    function dar_alta_empleado($cumple,$nombre,$apellido,$genero,$salario,$cargo){
        $cod=generar_cod_emp()[0]['max(emp_no)']+1;
        $ahora=date('Y-m-d h:m:s');
        alta_emp($cod,$cumple,$nombre,$apellido,$genero,$ahora);
        alta_salario($cod,$salario,$ahora);
        alta_cargo($cod,$cargo,$ahora);
    }

    include_once("../views/view_alta.php");

?>
 