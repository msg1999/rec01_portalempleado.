<?php
    require_once("../db/db.php");

    function departamentos($empleado){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT dept_no from dept_emp where emp_no = :id and to_date='9999-01-01 00:00:00'");
            
            $obtenerID->bindParam(":id", $empleado);
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "<strong>ERROR: </strong> ". $ex->getMessage();
        }
    }
    function nombreDepartamento($dpt_name){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT dept_name from departments where dept_no = :dept_no");
            
            $obtenerID->bindParam(":dept_no", $dpt_name);
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "<strong>ERROR: </strong> ". $ex->getMessage();
        }
    }

    function puestos($empleado){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT title from titles where emp_no = :id and to_date='9999-01-01 00:00:00'");
            
            $obtenerID->bindParam(":id", $empleado);
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "<strong>ERROR: </strong> ". $ex->getMessage();
        }
    }

    function nominas($empleado){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT salary from salaries where emp_no = :id and to_date='9999-01-01 00:00:00'");
            
            $obtenerID->bindParam(":id", $empleado);
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "<strong>ERROR: </strong> ". $ex->getMessage();
        }
    }
?>