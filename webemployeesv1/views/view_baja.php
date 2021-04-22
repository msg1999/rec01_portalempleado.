<html>
    <body>
        <p>
            Baja empleados
        </p>
        <form action="controller_baja.php" method="POST">
            Codigo empleado
            <select name="empleado">
                <?php
                for ($i=0; $i < count($empleados); $i++) { 
                    echo("<option>".$empleados[$i]['emp_no']."</option>");
                }
                ?>
            </select><br>
            <input type="submit" name="baja" value="baja">
        </form>
    </body>
</html>  