<html>
    <body>
        <!---->
        <?php
            if (isset($_POST['cambio'])){
                $id=$_POST['emp_no'];
                $sueldo=$_POST['salary'];
                $ahora=date('Y-m-d h:m:s');

                cambiar_sueldo($id,$ahora);
                nuevo_sueldo($id,$sueldo,$ahora);
            }
        ?>
        <!---->
        <p>
            Cambio salario
        </p>
        <form action="controller_salario.php" method="POST">
            <input type="text" name="emp_no">Codigo empleado</input><br>
            <input type="text" name="salary">Sueldo nuevo de empleado</input><br>
            
            <input type="submit" name="cambio" value="cambio">
        </form> 
    </body>
</html> 