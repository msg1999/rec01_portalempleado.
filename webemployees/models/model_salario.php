<?php
    require_once("../db/db.php");

    function cambiar_sueldo($id,$ahora){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("UPDATE salaries SET to_date='$ahora' where emp_no='$id' and to_date='9999-01-01 00:00:00'");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    function nuevo_sueldo($id,$sueldo,$ahora){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("INSERT into salaries (emp_no,salary,from_date,to_date) values ('$id','$sueldo','$ahora','9999-01-01 00:00:00')");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
?>