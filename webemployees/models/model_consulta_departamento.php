<?php
    require_once("../db/db.php");

    function jefe_departamento($departamento){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT emp_no from dept_manager where dept_no = :id");
            
            $obtenerID->bindParam(":id", $departamento);
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "<strong>ERROR: </strong> ". $ex->getMessage();
        }
    }

    function empleados_departamento($departamento){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT emp_no from dept_emp where dept_no = :id");
            
            $obtenerID->bindParam(":id", $departamento);
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "<strong>ERROR: </strong> ". $ex->getMessage();
        }
    }

    function departamentos(){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT dept_no from departments");
            
            $obtenerID->bindParam(":id", $departamento);
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "<strong>ERROR: </strong> ". $ex->getMessage();
        }
    }
?> 