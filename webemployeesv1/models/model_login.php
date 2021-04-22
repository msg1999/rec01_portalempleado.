<?php
    require_once("../db/db.php");

    function obtenerAcceso($empno,$lastname) {
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT * FROM employees WHERE emp_no = :emp_no and last_name = :last_name");
            $obtenerID->bindParam(":emp_no", $empno);
            $obtenerID->bindParam(":last_name", $lastname);
            $obtenerID->execute();
            return $obtenerID->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "<strong>ERROR: </strong> ". $ex->getMessage();
        }

    }

    function validarActual($id)  {
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT * from dept_emp where emp_no = :id and to_date='9999-01-01 00:00:00'");
            
            $obtenerID->bindParam(":id", $id);
            $obtenerID->execute();
            return $obtenerID->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo "<strong>ERROR: </strong> ". $ex->getMessage();
        }

    }
?>