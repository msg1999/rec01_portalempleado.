<?php
    require_once ('../models/model_baja.php');

    if (isset($_POST['baja'])){

        $_POST['empleado']=explode('#',$_POST['empleado'])[0];


        baja_empleado($_POST['empleado'],date('Y-m-d h:m:s'));
        baja_empleado_jefe($_POST['empleado'],date('Y-m-d h:m:s'));
        baja_empleado_salario($_POST['empleado'],date('Y-m-d h:m:s'));
        baja_empleado_titulo($_POST['empleado'],date('Y-m-d h:m:s'));
    }

    $empleados=empleados();

    for ($i=0; $i < count($empleados); $i++) { 
        $nombre=nombre_emp($empleados[$i]['emp_no'])[0]['first_name'];
        $empleados[$i]['emp_no']=$empleados[$i]['emp_no']."#".$nombre;
    }


    include_once("../views/view_baja.php");

?>  