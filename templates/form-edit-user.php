<?php

include '../config/conexion.php';
include '../partials/header.php';

if (isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "select * from usuario where Id = '".$id."'";
    $resultado = mysqli_query($con, $sql);

    if (mysqli_num_rows($resultado) == 1){
        $row = mysqli_fetch_array($resultado);

        $user = $row['Usuario'];
        $email = $row['Email'];
    }

}



?>


<div class="container mt-4">

    <div class="row">

        <form action="../stmt/EditUser.php" method="post">

            <input name="txtId" type="hidden" value="<?php echo $id ?>">
            
            <div class="form-group">
                <label for="exampleFormControlInput1">Usuario</label>
                <input class="form-control" name="txtUser" value="<?php echo $user ?>" type="text" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" name="txtEmail" value="<?php echo $email ?>" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <input type="submit" name="updateUser" value="Actualizar" class="btn btn-success">
            <a href="../index.php">regresar</a>

        </form>
    </div>

</div>
