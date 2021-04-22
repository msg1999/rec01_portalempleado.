<?php 
    require_once("../db/db.php");

    function cambiar_departamento_empleado($id,$ahora){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("UPDATE dept_emp SET to_date='$ahora' where emp_no='$id' and to_date='9999-01-01 00:00:00'");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function nuevo_departamento($cod,$departamento,$ahora){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("INSERT into dept_emp (emp_no,dept_no,from_date,to_date) values ('$cod','$departamento','$ahora','9999-01-01 00:00:00')");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
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

    function nombre_dept($departamento){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT dept_name from departments where dept_no=:id");
            
            $obtenerID->bindParam(":id", $departamento);
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "<strong>ERROR: </strong> ". $ex->getMessage();
        }
    }

?> 