<?php
    require_once ('../models/model_cambio_departamento.php');

    if (isset($_POST['cambio'])){
        $id=$_POST['emp_no'];
        $departamento=$_POST['dept_no'];
        $ahora=date('Y-m-d h:m:s');
        cambiar_departamento_empleado($id,$ahora);
        nuevo_departamento($id,$departamento,$ahora);
    }
    $departamentos=departamentos();
    $empleados=empleados();

    include_once("../views/view_cambio_departamento.php");
?> 