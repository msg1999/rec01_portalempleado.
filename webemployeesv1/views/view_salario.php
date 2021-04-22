<html>
    <body>
        <p>
            Cambio salario
        </p>
        <form action="controller_salario.php" method="POST">
            Codigo empleado
            <select name="emp_no">
                <?php
                for ($i=0; $i < count($empleados); $i++) { 
                    echo("<option>".$empleados[$i]['emp_no']."</option>");
                }
                ?>
            </select><br>
            <input type="text" name="salary">Sueldo nuevo de empleado</input><br>
            
            <input type="submit" name="cambio" value="cambio">
        </form> 
    </body>
</html>  