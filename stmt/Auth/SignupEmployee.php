<?php include '../../config/conexion.php';

if (!empty($_POST['email']) && !empty($_POST['clave'])
    && !empty($_POST['ConfirmClave']) && !empty($_POST['celular'])){

    if ($_POST['clave'] == $_POST['ConfirmClave']){

        $email = $_POST['email'];
        //$pw = password_hash($_POST['clave'], PASSWORD_BCRYPT);
        $pw = $_POST['clave'];
        $celular = $_POST['celular'];

        $query = "INSERT INTO employee( correo, clave, celular) VALUES('$email', '$pw', '$celular')";

        $res = mysqli_query($con, $query);

        if (!$res){
            die("Failed to Save");
        }else{
            header("location: ../../templates/tmpAuth/login-form.php");
        }
    }else{
        header("location: ../../templates/tmpAuth/signup-form.php");
    }



}else{
    die("error");
}