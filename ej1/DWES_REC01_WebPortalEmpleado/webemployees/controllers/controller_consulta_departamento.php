<?php
    require_once ('../models/model_consulta_departamento.php');
    include_once("../views/view_consulta_departamento.php");

    function consulta_departamento($id){
        echo("JEFE: ");
        echo(jefe_departamento($id)[0]['emp_no'].('</br>'));
        echo("Integrantes departamento: </br>");
        for ($a=0; $a < count(empleados_departamento($id)); $a++) { 
            echo(empleados_departamento($id)[$a]['emp_no']."</br>");
        }
    }
?>