<?php
/*--=============== INICIAR SESION PARA GUARDAR MENSAJES            
===================================================--*/
session_start();




/*--=============== CONEXION BD             
===================================================--*/

$conectar = mysqli_connect(
    "localhost",
    "root",
    "",
    "php_mysql_crud",

);

/*if (isset($conectar))
echo "conectado";  (con esto puedo probar que la base de datos se esta ejecutando)*/




?>