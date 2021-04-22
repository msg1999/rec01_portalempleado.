<?php
    require_once ('../models/model_alta_departamento.php');

    if (isset($_POST['alta'])){
        $no=substr(generar_cod_dpt()[0]['max(dept_no)'],1)+1;
        if ($no>0&&$no<10)
            $dept_no="d00".$no;
        else if($no>9&&$no<100)
            $dept_no="d0".$no;
        else if($no>99&&$no<1000)
            $dept_no="d".$no;
        $dept_name=$_POST['dept_name'];
        var_dump($dept_no);
        alta_departamento($dept_no,$dept_name);
    }

    include_once("../views/view_alta_departamento.php");

?> 