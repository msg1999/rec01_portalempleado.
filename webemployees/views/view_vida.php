<html>
    <body>
        <!---->
        <?php
            if (isset($_POST['ver'])){
                $empleado=$_POST['empleado'];
                
                //var_dump(datos($empleado));
                echo("Datos del usuario: </br>");
                for ($a=0; $a < count(datos($empleado)); $a++) { 
                    echo('Empleado numero: '.datos($empleado)[$a]['emp_no'].', ');
                    echo('Fecha de nacimiento: '.datos($empleado)[$a]['birth_date'].', ');
                    echo('Nombre: '.datos($empleado)[$a]['first_name'].', ');
                    echo('Apellido: '.datos($empleado)[$a]['last_name'].', ');
                    echo('Sexo: '.datos($empleado)[$a]['gender'].', ');
                    echo('Fecha de alta: '.datos($empleado)[$a]['hire_date']);
                }
                echo("</br>");


                //var_dump(departamentos($empleado));
                echo("</br>Departamentos del usuario: </br>");
                for ($a=0; $a < count(departamentos($empleado)); $a++) {
                    //echo(departamentos($empleado)[$a]['emp_no'].' # '); 
                    echo('Departamento: '.obtener_dpt(departamentos($empleado)[$a]['dept_no'])[0]['dept_name'].', '); 
                    echo('del '.departamentos($empleado)[$a]['from_date']); 
                    echo(' al '.departamentos($empleado)[$a]['to_date']); 
                    if(departamentos($empleado)[$a]['to_date']=='9999-01-01 00:00:00')
                        echo (' ACTUAL');
                    else
                        echo(' al '.departamentos($empleado)[$a]['to_date']); 
                    echo("</br>");
                }

                //var_dump(salarios($empleado));
                echo("</br>Salarios del usuario: </br>");
                for ($a=0; $a < count(salarios($empleado)); $a++) { 
                    //echo(salarios($empleado)[$a]['emp_no'].' # '); 
                    echo('Salario: '.salarios($empleado)[$a]['salary'].', '); 
                    echo('del '.salarios($empleado)[$a]['from_date']); 
                    //echo(' al '.salarios($empleado)[$a]['to_date']); 
                    if(salarios($empleado)[$a]['to_date']=='9999-01-01 00:00:00')
                        echo (' ACTUAL');
                    else
                        echo(' al '.salarios($empleado)[$a]['to_date']); 
                    echo("</br>");
                }

                //var_dump(titulos($empleado));
                echo("</br>Puestos del usuario: </br>");
                for ($a=0; $a < count(titulos($empleado)); $a++) { 
                    //echo(titulos($empleado)[$a]['emp_no'].' # '); 
                    echo(titulos($empleado)[$a]['title'].', '); 
                    echo(' del '.titulos($empleado)[$a]['from_date'].', ');
                    if(titulos($empleado)[$a]['to_date']=='9999-01-01')
                        echo ('actual');
                    else
                        echo(' al '.titulos($empleado)[$a]['to_date']); 
                }
            }
        ?>
        <!---->
        <p>
            Consultar vida
        </p>
        <form action="controller_vida.php" method="POST">
            <input type="text" name="empleado">Codigo empleado</input><br>
            
            <input type="submit" name="ver" value="ver">
        </form> 
    </body>
</html> 