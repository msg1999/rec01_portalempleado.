<?php 
    require_once("../db/db.php");

    function alta_emp($cod,$cumple,$nombre,$apellido,$genero,$ahora) {
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("INSERT into employees (emp_no,birth_date,first_name,last_name,gender,hire_date) values ($cod,'$cumple','$nombre','$apellido','$genero','$ahora')");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    function alta_salario($cod,$salario,$ahora){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("INSERT into salaries (emp_no,salary,from_date,to_date) values ($cod,$salario,'$ahora','9999-01-01 00:00:00')");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
    function alta_cargo($cod,$cargo,$ahora){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("INSERT into titles (emp_no,title,from_date,to_date) values ($cod,'$cargo','$ahora','9999-01-01 00:00:00')");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo  $ex->getMessage();
        } 
    }
    function generar_cod_emp(){
        global $conexion;

        try {
            $obtenerID = $conexion->prepare("SELECT max(emp_no) FROM employees");
            $obtenerID->execute();
            return $obtenerID->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $ex) {
            echo $ex->getMessage();
        }
    }
?>