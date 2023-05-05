<?php
include("db.php");
$title = '';
$description= '';

if (isset($_GET['id'])){
    $id = $_GET['id'];
    /*consulta a mysql*/ 
    $query = "SELECT * FROM tareas WHERE id = $id"; /*editar el id donde el id sea igual al id que me estan paando la variable id*/
   
    $resultado = mysqli_query($conectar, $query);
    if(mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        $titulo =  $row['titulo'];
        $descripcion = $row['descripcion'];
       

    }

}

 /*Obtener datos para actalizar o editar*/ 
if (isset($_POST['actualizar'])){
    $id = $_GET['id'];
    $titulo = $_POST['titulo'];
   $descripcion =  $_POST['descripcion'];

  

    /*consulta para mostrar los datos de DB en el formulario de editar*/ 
  $query = "UPDATE tareas set  titulo = '$titulo', descripcion = '$descripcion' WHERE  id = $id";
  /*EJECUTAR CONSULTA DE LO ANTERIOR*/
    mysqli_query($conectar ,$query);
   
    /*Mensaje al actualizar*/
    $_SESSION['message'] = 'Actualizacion exitosa';
    $_SESSION['message_type'] = 'primary';
   
   
   
    /*lo siquiete para que cuando termine la conculta mi pagina vuelva al inicio con el header*/
    header("location: index.php");

}

?>

<?php include("includes/navegacion.php")?>
<?php include("includes/header.php")?>

<!--Formulario para editar-->

<div class="container p-4">
    <div class="row">
    <div class="col-md-4 mx-auto">
        <div class="card card-body">
            <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                <div class="form-group">
                <input type="text" name="titulo" value="<?php echo $titulo;?>" class="form-control" placeholder="Actualizar titulo">
                </div>
                <!--actulizar descripcion-->
                    <div class="form-grou">
                        <textarea name="descripcion"  rows="2" class="form-control" placeholder="Actualizar descripcion"><?php echo $descripcion; ?></textarea>
                    </div>
                    <br> 
                    <button class="btn btn-success" name="actualizar">
                        Actualizar
                    </button>

            </form>

        </div>

    </div>
</div>

</div>

<?php include("includes/footer.php")?>


 
