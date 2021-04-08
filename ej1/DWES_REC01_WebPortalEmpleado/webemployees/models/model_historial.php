<?php
    require_once("../db/db.php");

    function consultar_salario($usuario){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("select * from salaries where emp_no=$usuario");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function consultar_departamentos($usuario){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("select * from dept_emp where emp_no=$usuario");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
?>