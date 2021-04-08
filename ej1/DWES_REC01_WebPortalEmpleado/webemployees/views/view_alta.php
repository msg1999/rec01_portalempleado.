<html>
    <body>
        <!---->
        <?php
            if (isset($_POST['alta'])){
                $cumple=$_POST['birth-date'];
                $nombre=$_POST['first-name'];
                $apellido=$_POST['last-name'];
                $genero=$_POST['gender'];
                $salario=$_POST['salary'];
                $cargo=$_POST['cargo'];
                dar_alta_empleado($cumple,$nombre,$apellido,$genero,$salario,$cargo);
            }
        ?>
        <!---->
        <p>
            Alta empleados
        </p>
        <form action="controller_alta.php" method="POST">
            <input type="text" name="birth-date">Fecha de nacimiento</input><br>
            <input type="text" name="first-name">Nombre</input><br>
            <input type="text" name="last-name">Apellido</input><br>
            <input type="text" name="gender">Genero</input><br>
            <input type="text" name="salary">Salario</input><br>
            <input type="text" name="cargo">Cargo</input><br>
            
            <input type="submit" name="alta" value="name">
        </form>
    </body>
</html>