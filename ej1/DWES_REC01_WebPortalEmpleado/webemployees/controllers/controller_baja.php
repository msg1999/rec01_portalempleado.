<?php
    require_once ('../models/model_baja.php');
    include_once("../views/view_baja.php");


    function dar_baja($id){
        $ahora=date('Y-m-d h:m:s');
        baja_empleado($id,$ahora);
    }
?>