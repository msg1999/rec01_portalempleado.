<?php
    require_once("../db/db.php");

    function baja_empleado($id,$ahora){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("UPDATE dept_emp SET to_date='$ahora' where emp_no='$id' and to_date='9999-01-01 00:00:00'");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function baja_empleado_jefe($id,$ahora){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("UPDATE dept_manager SET to_date='$ahora' where emp_no='$id' and to_date='9999-01-01 00:00:00'");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function baja_empleado_salario($id,$ahora){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("UPDATE salaries SET to_date='$ahora' where emp_no='$id' and to_date='9999-01-01 00:00:00'");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function baja_empleado_titulo($id,$ahora){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("UPDATE titles SET to_date='$ahora' where emp_no='$id' and to_date='9999-01-01 00:00:00'");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
?>  