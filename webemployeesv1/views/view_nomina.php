<html>
    <body>
        <p>
            Datos personales
        </p>
        <?php
            echo('PERTENECIENCE AL DEPARTAMENTO DE: '.departamento($_SESSION['id'])."</br>");
            echo('PUESTO DEL EMPLEADO: '.$puestos."</br>");
            echo('NOMINA: '.nomina($_SESSION['id']));
        ?>
    </body>
</html>  