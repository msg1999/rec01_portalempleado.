<?php 
    session_start();

    require_once ('../models/model_alta_masiva.php');

    if (!isset($_SESSION['SHOPPING_CART']))
        $_SESSION['SHOPPING_CART'] = array();
    if (isset($_POST['agregar'])){
        $cumple=$_POST['birth-date'];
        $nombre=$_POST['first-name'];
        $apellido=$_POST['last-name'];
        $genero=$_POST['gender'];
        $salario=$_POST['salary'];
        $cargo=$_POST['cargo'];

        $usuario=[$cumple,$nombre,$apellido,$genero,$salario,$cargo];

        array_push($_SESSION['SHOPPING_CART'],$usuario);


    }
    $carrito=$_SESSION['SHOPPING_CART'];

    if (isset($_POST['ejecutar'])){
        for ($i=0; $i < count($_SESSION['SHOPPING_CART']); $i++) {
            $_SESSION['SHOPPING_CART'][$i];
            dar_alta_empleado($_SESSION['SHOPPING_CART'][$i][0],$_SESSION['SHOPPING_CART'][$i][1],$_SESSION['SHOPPING_CART'][$i][2],$_SESSION['SHOPPING_CART'][$i][3],$_SESSION['SHOPPING_CART'][$i][4],$_SESSION['SHOPPING_CART'][$i][5]);
        }
        unset($_SESSION['SHOPPING_CART']);
        echo('AGREGADO');
    }
    

    function dar_alta_empleado($cumple,$nombre,$apellido,$genero,$salario,$cargo){
        $cod=generar_cod_emp()[0]['max(emp_no)']+1;
        $ahora=date('Y-m-d h:m:s');
        alta_emp($cod,$cumple,$nombre,$apellido,$genero,$ahora);
        alta_salario($cod,$salario,$ahora);
        alta_cargo($cod,$cargo,$ahora);
    }

    include_once("../views/view_alta_masiva.php");

?>
