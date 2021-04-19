<html>
    <body>
        <p>
            Consulta departamento
        </p>
        <form action="controller_consulta_departamento.php" method="POST">
            Codigo departamento
            <select name="departamento">
                <?php
                    for ($i=0; $i < count($departamentos); $i++) { 
                        echo("<option>".$departamentos[$i]['dept_no']."</option>");
                    }
                ?>
            </select><br>
            <input type="submit" name="consulta" value="consulta">
        </form> 
    </body>
</html>  