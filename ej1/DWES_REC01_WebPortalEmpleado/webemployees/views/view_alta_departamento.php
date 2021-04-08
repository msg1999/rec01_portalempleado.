<html>
    <body>
        <!---->
        <?php
            if (isset($_POST['alta'])){
                $dept_no=$_POST['dept_no'];
                $dept_name=$_POST['dept_name'];
                dar_alta_departamento($dept_no,$dept_name);
            }
        ?>
        <!---->
        <p>
            Alta departamento
        </p>
        <form action="controller_alta_departamento.php" method="POST">
            <input type="text" name="dept_name">Nombre de departamento</input><br>
            <input type="text" name="dept_no">Numero de departamento</input><br>
            
            <input type="submit" name="alta" value="name">
        </form>
    </body>
</html>