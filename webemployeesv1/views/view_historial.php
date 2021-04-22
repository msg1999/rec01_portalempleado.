<?php
?>
<html>
    <body>
        <p>
            HISTORIAL LABORAL
        </p>

        <div>
            <p>
                Departamentos:</br>
                <?php
                    for ($i=0; $i < count($departamentos); $i++) { 
                        echo(consultar_n($departamentos[$i]['dept_no'])[0]['dept_name'])."-->";
                        echo($departamentos[$i]['from_date'])."--";
                        echo($departamentos[$i]['to_date'])."</br>";
                    }
                ?>
                </br>Salarios:</br>
                <?php
                    for ($i=0; $i < count($salarios); $i++) { 
                        echo($salarios[$i]['salary']." &#8364 -->");
                        echo($salarios[$i]['from_date'])."--";
                        echo($salarios[$i]['to_date'])."</br>";
                    }
                ?>
            </p>
        </div>
    </body>
</html> 