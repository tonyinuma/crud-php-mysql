
<?php include 'config/conexion.php'; ?>
<?php include("partials/header.php") ?>

   <div class="container mt-4">

       <div class="row">
           <div class="col-md-12">

               <a href="templates/form-add-user.php" class="btn btn-success">Nuevo</a>

               <table class="table table-bordered mt-3">
                   <thead>
                   <tr>
                       <th>ID</th>
                       <th>Usuario</th>
                       <th>Email</th>
                       <th>Acciones</th>
                   </tr>
                   </thead>
                   <tbody>

                   <?php
                   $sql = "select * from usuario";
                   $resultado = mysqli_query($con, $sql);

                    while ($fila = mysqli_fetch_array($resultado)){
                   ?>
                   <tr>
                       <td><?php echo $fila['Id'] ?></td>
                       <td><?php echo $fila['Usuario'] ?></td>
                       <td><?php echo $fila['Email'] ?></td>
                       <td>
                           <a href="templates/form-edit-user.php?id=<?php echo $fila['Id'] ?>" class="btn btn-warning">Editar</a>
                           <a href="stmt/DeleteUser.php?id=<?php echo $fila['Id'] ?>" class="btn btn-danger">Eliminar</a>
                       </td>
                   </tr>
                   <?php } ?>
                   </tbody>
               </table>
           </div>
       </div>

   </div>

</body>
</html>