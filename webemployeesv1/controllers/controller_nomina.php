<?php
    require_once ('../models/model_nomina.php');

    session_start();
    $puestos=puestos($_SESSION['id'])[0]['title'];

    function departamento($id){
        $id_dept=departamentos($id)[0]['dept_no'];
        $dpt=nombreDepartamento($id_dept);
        return $dpt[0]['dept_name'];
    }

    function nomina($id){
        $salario=nominas($id)[0]['salary'];//////

        $plus=0; 
        $seguridad_social=($salario*7.5)/100;

        if(puestos($id)[0]['title']=='Engineer')/////
            $plus=$salario+10000;

        if($salario<40000)//10
            $IRPF=($salario*10)/100;
        if($salario>=4000&&$salario<70000)//20
            $IRPF=($salario*20)/100;
        if($salario>70000)//30
            $IRPF=($salario*30)/100;

        $nomina=(($salario-$seguridad_social)+$plus)-$IRPF;


        return 'El salario es de: '.$salario.' la nomina es de: '.$nomina.', el IRPF es de: '.$IRPF.', la seguridad social es de: '.$seguridad_social.' y el plus es de: '.$plus;
    }

    include_once("../views/view_nomina.php");

?> 