<html>
    <body>
        <p>
            Cambio departamento
        </p>
        <form action="controller_cambio_departamento.php" method="POST">
            Codigo empleado
            <select name="emp_no">
                <?php
                for ($i=0; $i < count($empleados); $i++) { 
                    echo("<option>".$empleados[$i]['emp_no']."</option>");
                }
                ?>
            </select><br>
            Codigo nuevo de departamento
            <select name="dept_no">
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