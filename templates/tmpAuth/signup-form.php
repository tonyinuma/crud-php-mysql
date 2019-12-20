<?php include("../../partials/header.php") ?>

<div class="container mt-5 ml-5">
    <h1>Registro</h1>
    <br>
    <div class="row">

        <form action="../../stmt/Auth/SignupEmployee.php" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="clave">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Confirm Password</label>
                <input type="password" class="form-control" name="ConfirmClave">
            </div>

            <div class="form-group">
                <label for="exampleInputPassword1">Celular</label>
                <input type="text" class="form-control" name="celular">
            </div>
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>
</div>
