<?php
include("db.php");

if (isset($_GET['id'])){  /*si existe atravez del metodo get datos ne id, entomces id sera igual a la variable id*/
    $id = $_GET['id'];
    /*consulta a mysql*/
    $query = "DELETE FROM tareas WHERE id = $id"; /*Elimine el id donde el id sea igual al id que me estan paando la variable id*/
    
    /*Ejecutar consulta anterior*/
    $resultado = mysqli_query($conectar, $query);

    if(!$resultado) {    /**Si no existe nigun dato terminara la aplicacion o consulta*/
        die("Query fail");
    }
/**Si lo ha eliminado entonces lo redireccionamos al inicio*/
$_SESSION['message'] = 'Se elimino correctamente'; /**mensaje a mostrar a la hora de elimiara */
$_SESSION['message_type'] = 'danger'; /**color del mensaje al eliminar */
 header("Location: index.php"); /**redireccionar al inicio luego de eliminar */
}