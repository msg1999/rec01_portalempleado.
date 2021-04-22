<?php
    session_start();


    require_once ('../models/model_historial.php');

    $salarios=consultar_salario($_SESSION['id']);
    $departamentos=consultar_departamentos($_SESSION['id']);


    include_once("../views/view_historial.php");

?>