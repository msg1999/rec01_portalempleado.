<html>
    <body>
        <!---->
        <?php
            if (isset($_POST['cambio'])){
                $id=$_POST['cod'];
                $departamento=$_POST['departamento'];
                $ahora=date('Y-m-d h:m:s');

                cambiar_jefe_departamento($id,$ahora);
                nuevo_jefe_departamento($id,$departamento,$ahora);
            }
        ?>
        
        
        <!---->
        <p>
            Cambio jefe departamento
        </p>
        <form action="controller_jefe.php" method="POST">
            <input type="text" name="cod">Codigo empleado</input><br>
            <input type="text" name="departamento">Departamento</input><br>
            
            <input type="submit" name="cambio" value="cambio">
        </form> 
    </body>
</html> 