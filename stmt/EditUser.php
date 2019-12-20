<?php include '../config/conexion.php';

    if (isset($_POST['updateUser'])){

        $id = $_POST['txtId'];
        $user = $_POST['txtUser'];
        $email = $_POST['txtEmail'];

        $query = "UPDATE usuario SET Usuario = '$user', Email = '$email' 
                    WHERE Id = '$id'";

        $res = mysqli_query($con, $query);

        header("Location: ../index.php");
    }


