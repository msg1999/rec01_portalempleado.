<html>
    <body>
        <!---->
        <?php
            if (isset($_POST['consulta'])){
                $id=$_POST['departamento'];

                consulta_departamento($id);
            }
        ?>
        <!---->
        <p>
            Consulta departamento
        </p>
        <form action="controller_consulta_departamento.php" method="POST">
            <input type="text" name="departamento">Codigo departamento</input><br>
            
            <input type="submit" name="consulta" value="consulta">
        </form> 
    </body>
</html> 