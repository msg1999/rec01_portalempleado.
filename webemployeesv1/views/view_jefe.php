<html>
    <body>
        <p>
            Cambio jefe departamento
        </p>
        <form action="controller_jefe.php" method="POST">
            Codigo empleado
            <select name="cod">
                <?php
                for ($i=0; $i < count($empleados); $i++) { 
                    echo("<option>".$empleados[$i]['emp_no']."</option>");
                }
                ?>
            </select><br>
            Codigo nuevo de departamento
            <select name="departamento">
                <?php
                for ($i=0; $i < count($departamentos); $i++) { 
                    echo("<option>".$departamentos[$i]['dept_no']."</option>");
                }
                ?>
            </select>
            <input type="submit" name="cambio" value="cambio">
        </form> 
    </body>
</html>   