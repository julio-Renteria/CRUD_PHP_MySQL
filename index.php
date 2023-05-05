<?php 
    /*--=============== LLAMADO DE PARTES O ARCHIVOS DE LA PAGNA            
===================================================--*/
    include("db.php");
    include("includes/header.php");
   
    include("includes/navegacion.php");

?>




<?php
/*--=============== MOSTRAR MENSAJE AL GUARDAR OCN LA SESSION           
===================================================--*/?>

<div class="container p-4">

    <div class="row">

        <div class="col-md-4">


        <?php if(isset($_SESSION['message'])){ ?>

            <div class="alert alert-<?= $_SESSION['message_type'];?> alert-dismissible fade show" role="alert">
            <?= $_SESSION['message'] ?> 
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <span aria-hiden="true"></span>
            </div>
<?php session_unset();/* este session limpia los datos que tengo en la variable session àra le mensaje */} ?>

            <div class="card card-body">

             <form action="guardar.php" method="POST">
                <div class="form-grouo">
                    <input type="text" name="titulo" class="form-control" 
                    placeholder="Escrb iba el Titulo" autofocus>
                </div>

                <br> 

            <div class="form-grouo">
                <textarea name="descripcion" rows="2" class="form-control"
                placeholder="Escriba su Descripcion"></textarea>
            </div>
            <br>

                <input type="submit" class="btn btn-success btn-block" name="guardar_tarea"
                value="Guardar">
            </form>
            
            </div>
        </div>
</di>

        <?php
/*--=============== MOSTRAR MENSAJE AL GUARDAR OCN LA SESSION           
===================================================--*/?>

<div class="col-md-8">
        <table class="table table-bordered">

        <thead class="cabezera">
              <tr>
                <th>Titulo</th>
                <th>Descripcion</th>
                <th>Create At</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <!--consulta para mostrar datos en la tabla-->
            <?php 
            $query = "SELECT * FROM tareas";
            $resultado_tareas = mysqli_query($conectar, $query); 

            while($row = mysqli_fetch_array($resultado_tareas)) { ?>

                <tr>
                    <td><?php echo $row['titulo'] ?></td>
                    <td><?php echo $row['descripcion'] ?></td>
                    <td><?php echo $row['created at'] ?></td>

                    <td>
                        <!--boton Para editar que me redireciona-->
                        <a href="editar.php?id=<?php echo $row['id']?>" class="btn btn-secondary">
                        <i class="fas fa-marker"></i>
                        </a>
                        <!--boton Para eliminar-->
                        <a href="eliminar.php?id=<?php echo $row['id']?>" class="btn btn-danger">
                        <i class="far fa-trash-alt"></i>
                        </a>
                    </td>

                </td>
                



            <?php } ?>    
            
            </tbody>
       
            
        </table>


      

        

    </div>
    </div>
      </div

    









<?php include("includes/header.php");?>







