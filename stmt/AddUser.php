<?php include '../config/conexion.php';

    if (isset($_POST['txtUser']) && isset($_POST['txtEmail'])){

        $user = $_POST['txtUser'];
        $email = $_POST['txtEmail'];

        $query = "INSERT INTO usuario( Usuario, Email) VALUES('$user', '$email')";
        $res = mysqli_query($con, $query);

        if (!$res){
            die("Failed to Save");
        }else{
            header("Location: ../index.php");
        }

    }


