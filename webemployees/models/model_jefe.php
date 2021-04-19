<?php
    require_once("../db/db.php");

    function cambiar_jefe_departamento($id,$ahora){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("UPDATE dept_manager SET to_date='$ahora' where emp_no='$id' and to_date='9999-01-01 00:00:00'");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }

    function nuevo_jefe_departamento($cod,$departamento,$ahora){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("INSERT into dept_manager (emp_no,dept_no,from_date,to_date) values ('$cod','$departamento','$ahora','9999-01-01 00:00:00')");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
?>