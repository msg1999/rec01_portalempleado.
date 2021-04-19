<?php
    require_once ('../models/model_consulta_departamento.php');


    if (isset($_POST['consulta'])){
        $id=$_POST['departamento'];

        echo("JEFE: </br>");
        if(isset(jefe_departamento($id)[0]['emp_no']))
            echo(jefe_departamento($id)[0]['emp_no'].('</br>'));
        echo("Integrantes departamento: </br>");
        for ($a=0; $a < count(empleados_departamento($id)); $a++) { 
            echo(empleados_departamento($id)[$a]['emp_no']."</br>");
        }
    }
    $departamentos=departamentos();

    include_once("../views/view_consulta_departamento.php");

?> 