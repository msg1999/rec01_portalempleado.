<html>
    <body>
        <?php
            if (isset($_POST['ver'])){
                
                echo("Datos del usuario: </br>");
                for ($a=0; $a < count($datos); $a++) { 
                    echo('Empleado numero: '.$datos[$a]['emp_no'].', ');
                    echo('Fecha de nacimiento: '.$datos[$a]['birth_date'].', ');
                    echo('Nombre: '.$datos[$a]['first_name'].', ');
                    echo('Apellido: '.$datos[$a]['last_name'].', ');
                    echo('Sexo: '.$datos[$a]['gender'].', ');
                    echo('Fecha de alta: '.$datos[$a]['hire_date']);
                }
                echo("</br>");

                echo("</br>Departamentos del usuario: </br>");
                for ($a=0; $a < count($departamentos); $a++) {
                    //var_dump($departamentos[0]['dept_no']);
                    //var_dump(obtener_dpt($departamentos));
                    echo('Departamento: '.$departamentos[0]['dept_no'].', '); 
                    echo('del '.$departamentos[0]['from_date']); 
                    echo(' al '.$departamentos[0]['to_date']); 
                    if($departamentos[0]['to_date']=='9999-01-01 00:00:00')
                        echo (' ACTUAL');
                    else
                        echo(' al '.$departamentos[0]['to_date']); 
                    echo("</br>");
                }

                echo("</br>Salarios del usuario: </br>");
                for ($a=0; $a < count($salarios); $a++) { 
                    echo('Salario: '.$salarios[$a]['salary'].', '); 
                    echo('del '.$salarios[$a]['from_date']); 
                    if($salarios[$a]['to_date']=='9999-01-01 00:00:00')
                        echo (' ACTUAL');
                    else
                        echo(' al '.$salarios[$a]['to_date']); 
                    echo("</br>");
                }

                echo("</br>Puestos del usuario: </br>");
                for ($a=0; $a < count($titulos); $a++) { 
                    echo($titulos[$a]['title'].', '); 
                    echo(' del '.$titulos[$a]['from_date'].', ');
                    if($titulos[$a]['to_date']=='9999-01-01')
                        echo ('actual');
                    else
                        echo(' al '.titulos($empleado)[$a]['to_date']); 
                }
            }
        ?>
        <p>
            Consultar vida
        </p>
        <form action="controller_vida.php" method="POST">
            Codigo empleado
            <select name="empleado">
                <?php
                for ($i=0; $i < count($empleados); $i++) { 
                    echo("<option>".$empleados[$i]['emp_no']."</option>");
                }
                ?>
            </select><br>
            <input type="submit" name="ver" value="ver">
        </form> 
    </body>
</html> 