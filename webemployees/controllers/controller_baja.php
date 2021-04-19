<?php
    require_once ('../models/model_baja.php');

    if (isset($_POST['baja'])){
        baja_empleado($_POST['empleado'],date('Y-m-d h:m:s'));
        baja_empleado_jefe($_POST['empleado'],date('Y-m-d h:m:s'));
        baja_empleado_salario($_POST['empleado'],date('Y-m-d h:m:s'));
        baja_empleado_titulo($_POST['empleado'],date('Y-m-d h:m:s'));
    }

    include_once("../views/view_baja.php");

?>