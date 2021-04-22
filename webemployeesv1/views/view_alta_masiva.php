<html>  
    <body>
        <?php
            for ($a=0; $a < count($carrito); $a++) {
                echo('</br>Usuario:');
                for ($b=0; $b < count($carrito[$a]); $b++) {
                    echo(' - '.$carrito[$a][$b]);
                }
            }
        ?>
        <p>
            Alta masiva empleados
        </p>
        <form action="controller_alta_masiva.php" method="POST">
            <input type="date" name="birth-date">Fecha de nacimiento</input><br>
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