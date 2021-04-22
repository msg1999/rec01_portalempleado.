<?php
    require_once ('../models/model_salario.php');

    if (isset($_POST['cambio'])){
        $id=explode('#',$_POST['emp_no'])[0];
        $sueldo=$_POST['salary'];
        $ahora=date('Y-m-d h:m:s');

        cambiar_sueldo($id,$ahora);
        nuevo_sueldo($id,$sueldo,$ahora);
    }

    $empleados=empleados();


    for ($i=0; $i < count($empleados); $i++) { 
        $nombre=nombre_emp($empleados[$i]['emp_no'])[0]['first_name'];
        $empleados[$i]['emp_no']=$empleados[$i]['emp_no']."#".$nombre;
    }

    include_once("../views/view_salario.php");
?> 