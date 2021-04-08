<?php
    session_start();
?>
<html>
    <body>
        <!---->
        
        <!---->
        <p>
            HISTORIAL LABORAL
        </p>
        <?php
            departamentos($_SESSION['id']);
            salarios($_SESSION['id']);
        ?>
    </body>
</html> 