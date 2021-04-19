<?php
    require_once ('../models/model_jefe.php');

    if (isset($_POST['cambio'])){
        $id=$_POST['cod'];
        $departamento=$_POST['departamento'];
        $ahora=date('Y-m-d h:m:s');

        cambiar_jefe_departamento($id,$ahora);
        nuevo_jefe_departamento($id,$departamento,$ahora);
    }

    include_once("../views/view_jefe.php");
?> 