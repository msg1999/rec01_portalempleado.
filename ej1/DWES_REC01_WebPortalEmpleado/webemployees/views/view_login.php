<?php
    session_start();

    if (!isset($_SESSION['id'])){
        if (isset($_POST) && !empty($_POST) && !isset($_SESSION['id'])){
            $idUsuario = obtenerAcceso($_POST['usuario'],$_POST['clave']);
            if (validarActual($idUsuario["emp_no"])==true) {
                $_SESSION['id']=$idUsuario['emp_no'];
                if (validarActual($idUsuario["emp_no"])['dept_no']=='d003'){
                    $_SESSION['human']=true;
                    header("location: controller_show_human.php");
                }
                else{
                    $_SESSION['human']=false;
                    header("location: controller_show.php");
                }
            }
            else if ($idUsuario == null) {
                echo "Email o contraseña erroneos";
            }
        } 
    }

    else{
        if ($_SESSION['human']==true)
            header("location: controller_show_human.php");
        else
            header("location: controller_show.php");

    }


?>
<html>
   
   <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VIDEOCLUB - IES Leonardo Da Vinci</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    </head>
      
     <body>
    <h1 class="text-center"> VIDEOCLUB IES LEONARDO DA VINCI</h1>

    <div class="container ">
        <!--Aplicacion-->
		<div class="card border-success mb-3" style="max-width: 30rem;">
		<div class="card-header">Login Usuario</div>
		<div class="card-body">
		
		<form id="" name="" action="" method="post" class="card-body">
		
		<div class="form-group">
			Usuario <input type="text" name="usuario" placeholder="usuario" class="form-control">
        </div>
		<div class="form-group">
			Clave <input type="password" name="clave" placeholder="usuario" class="form-control">
        </div>				
        
		<input type="submit" name="submit" value="Login" class="btn btn-warning disabled">
        </form>
		
	    </div>
    </div>
    </div>
    </div>



</body>
</html>