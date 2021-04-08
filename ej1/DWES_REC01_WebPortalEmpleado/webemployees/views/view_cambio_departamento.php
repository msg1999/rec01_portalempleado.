<html>
    <body>
        <!---->
        <?php
            if (isset($_POST['cambio'])){
                $id=$_POST['emp_no'];
                $departamento=$_POST['dept_no'];
                $ahora=date('Y-m-d h:m:s');
                cambiar_departamento_empleado($id,$ahora);
                nuevo_departamento($id,$departamento,$ahora);
            }
        ?>
        <!---->
        <p>
            Cambio departamento
        </p>
        <form action="controller_cambio_departamento.php" method="POST">
            <input type="text" name="emp_no">Codigo empleado</input><br>
            <input type="text" name="dept_no">Codigo nuevo de departamento</input><br>
            
            <input type="submit" name="cambio" value="cambio">
        </form> 
    </body>
</html> 