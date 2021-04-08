<html>
    <body>
        <!---->
        <?php
            session_start();
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

                for ($a=0; $a < count($_SESSION['SHOPPING_CART']); $a++) {
                    echo('</br>Usuario:');
                    for ($b=0; $b < count($_SESSION['SHOPPING_CART'][$a]); $b++) {
                        echo(' - '.$_SESSION['SHOPPING_CART'][$a][$b]);
                    }
                }
            }
            if (isset($_POST['ejecutar'])){
                for ($i=0; $i < count($_SESSION['SHOPPING_CART']); $i++) {
                    $_SESSION['SHOPPING_CART'][$i];
                    dar_alta_empleado($_SESSION['SHOPPING_CART'][$i][0],$_SESSION['SHOPPING_CART'][$i][1],$_SESSION['SHOPPING_CART'][$i][2],$_SESSION['SHOPPING_CART'][$i][3],$_SESSION['SHOPPING_CART'][$i][4],$_SESSION['SHOPPING_CART'][$i][5]);
                }
                unset($_SESSION['SHOPPING_CART']);
            }
        ?>
        <!---->
        <p>
            Alta masiva empleados
        </p>
        <form action="controller_alta_masiva.php" method="POST">
            <input type="text" name="birth-date">Fecha de nacimiento</input><br>
            <input type="text" name="first-name">Nombre</input><br>
            <input type="text" name="last-name">Apellido</input><br>
            <input type="text" name="gender">Genero</input><br>
            <input type="text" name="salary">Salario</input><br>
            <input type="text" name="cargo">Cargo</input><br>
            
            <input type="submit" name="agregar" value="agregar">
            <input type="submit" name="ejecutar" value="ejecutar">

        </form>
    </body>
</html>