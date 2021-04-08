<html>
    <body>
        <!---->
        <?php
            if (isset($_POST['baja']))
                dar_baja($_POST['empleado']);
        ?>
        <!---->
        <p>
            Baja empleados
        </p>
        <form action="controller_baja.php" method="POST">
            <input type="text" name="empleado">Empleado</input><br>
            
            <input type="submit" name="baja" value="baja">
        </form>
    </body>
</html>