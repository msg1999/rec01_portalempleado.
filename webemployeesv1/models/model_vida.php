<?php 
    require_once("../db/db.php");

    function consultar_usuario($empleado){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT * from employees where emp_no = :id");
            
            $obtenerID->bindParam(":id", $empleado);
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "<strong>ERROR: </strong> ". $ex->getMessage();
        }
    }

    function consultar_departamentos($empleado){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT * from dept_emp where emp_no = :id");
            
            $obtenerID->bindParam(":id", $empleado);
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "<strong>ERROR: </strong> ". $ex->getMessage();
        }
    }

    function consultar_salarios($empleado){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT * from salaries where emp_no = :id");
            
            $obtenerID->bindParam(":id", $empleado);
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "<strong>ERROR: </strong> ". $ex->getMessage();
        }
    }

    function consultar_titulos($empleado){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT * from titles where emp_no = :id");
            
            $obtenerID->bindParam(":id", $empleado);
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "<strong>ERROR: </strong> ". $ex->getMessage();
        }
    }

    function obtener_departamento($dpt){
        global $conexion;
var_dump($dpt);
        try {
            $obtenerID = $conexion->prepare("SELECT dept_name from departments where dept_no = :dpt");
            
            $obtenerID->bindParam(":dpt", $dpt['dept_no']);
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "<strong>ERROR: </strong> ". $ex->getMessage();
        }
    }

    function nombre_emp($empleado){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT first_name from employees where emp_no=:id");
            
            $obtenerID->bindParam(":id", $empleado);
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "<strong>ERROR: </strong> ". $ex->getMessage();
        }
    }

    function empleados(){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT emp_no from employees");
            
            $obtenerID->bindParam(":id", $departamento);
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "<strong>ERROR: </strong> ". $ex->getMessage();
        }
    }


?>