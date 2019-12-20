<?php include '../config/conexion.php';

    if (isset($_GET['id'])){

        $id = $_GET['id'];

        $query = "DELETE FROM usuario WHERE Id = '$id'";
        $res = mysqli_query($con, $query);

        if (!$res)
            die("Error to Delete");

        header("Location: ../index.php");
    }


