<?php include '../../config/conexion.php';

    if (!empty($_POST['email']) && !empty($_POST['clave'])){
        $email = $_POST['email'];
        $pw = ($_POST['clave']);

        $query = "select * from employee where correo = '$email' and clave = '$pw'";
        $res = mysqli_query($con, $query);
        $rows = mysqli_num_rows($res);

        if ($rows == 1){
            header("Location: ../../index.php");
        }else{
            echo $error = "Error de inicio de sesion";
        }
    }
