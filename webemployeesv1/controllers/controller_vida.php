<?php
    require_once ('../models/model_vida.php');

    function obtener_dpt($dpt){
        return(obtener_departamento($dpt));
    }

    if (isset($_POST['ver'])){
        $empleado=$_POST['empleado'];
        $datos=consultar_usuario($empleado);
        $departamentos =consultar_departamentos($empleado);
        $salarios=consultar_salarios($empleado);
        $titulos=consultar_titulos($empleado);
    } 
    
    $empleados=empleados();

    for ($i=0; $i < count($empleados); $i++) { 
        $nombre=nombre_emp($empleados[$i]['emp_no'])[0]['first_name'];
        $empleados[$i]['emp_no']=$empleados[$i]['emp_no']."#".$nombre;
    }

    include_once("../views/view_vida.php");

?> 