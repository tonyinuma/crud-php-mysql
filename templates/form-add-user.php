<?php include("../partials/header.php"); ?>


<div class="container mt-4">

    <div class="row">

        <form action="../stmt/AddUser.php" method="post">

            <div class="form-group">
                <label for="exampleFormControlInput1">Usuario</label>
                <input class="form-control" name="txtUser" type="text" placeholder="Enter Username">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Email</label>
                <input type="email" class="form-control" name="txtEmail"  id="exampleFormControlInput1" placeholder="name@example.com">
            </div>

            <input type="submit" value="Agregar" class="btn btn-success">
            <a href="../index.php">regresar</a>

        </form>
    </div>

</div>