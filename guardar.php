<?php

include('db.php');


if (isset($_POST['guardar_tarea'])){
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];

        /*--=============== Consulta a la base de datos           
===================================================--*/

    $query = "INSERT INTO tareas(titulo,descripcion) VALUES('$titulo', '$descripcion')";

    /*Con esto ejecuto la consulta anterior*/

    $resultado_Consulta = mysqli_query($conectar, $query);
    /*!$resuktado_consulta(si no esiste un resuktado)*/
    if(!$resultado_Consulta){
        die("query fail");
    }
/*si todo esta bien mostrara este mENSAJE */

    /*echo 'Guardado';*/

   $_SESSION['message'] = 'Guardado Correctamente';
   $_SESSION['message_type'] = 'success';

    header("location: index.php");/*Para que me redirecione al inicio cunado se haya guardado*/

  
}




    ?>