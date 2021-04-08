<?php
    require_once("../db/db.php");


    function alta_departamento($dept_no,$dept_name){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("INSERT into departments (dept_no,dept_name) values ('$dept_no','$dept_name')");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }



?>