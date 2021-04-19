<?php
    session_start();
?>
<html>
    <body>
        <!---->
        <!---->
        <p>
            Datos personales
        </p>
        <?php
            echo('PERTENECIENCE AL DEPARTAMENTO DE: '.departamento($_SESSION['id'])."</br>");
            echo('PUESTO DEL EMPLEADO: '.puesto($_SESSION['id'])."</br>");
            echo('NOMINA: '.nomina($_SESSION['id']));
        ?>
    </body>
</html>