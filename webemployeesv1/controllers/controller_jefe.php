<?php
    require_once ('../models/model_jefe.php');

    if (isset($_POST['cambio'])){
        $id=$_POST['cod'];
        $departamento=$_POST['departamento'];
        $ahora=date('Y-m-d h:m:s');

        cambiar_jefe_departamento($id,$ahora);
        nuevo_jefe_departamento($id,$departamento,$ahora);
    }

    $departamentos=departamentos();
    $empleados=empleados();


    for ($i=0; $i < count($empleados); $i++) { 
        $nombre=nombre_emp($empleados[$i]['emp_no'])[0]['first_name'];
        $empleados[$i]['emp_no']=$empleados[$i]['emp_no']."#".$nombre;
    }

    for ($i=0; $i < count($departamentos); $i++) { 
        $departamento=nombre_dept($departamentos[$i]['dept_no'])[0]['dept_name'];
        $departamentos[$i]['dept_no']=$departamentos[$i]['dept_no']."#".$departamento;
    }

    include_once("../views/view_jefe.php");
?>   