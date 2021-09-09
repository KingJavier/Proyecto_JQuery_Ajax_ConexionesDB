<?php

/*Requiere el archivo de configuracion con la coexion a la DB*/
require 'db_config.php';

/*Mediante el metodo post trae el id del elemento a eliminar*/
$id  = $_POST["id"];

/*Realiza la sentancia SQL para elminiar infrmacion de la tabla items */
$sql = "DELETE FROM items WHERE id = '".$id."'";


/* Convierte la información a formato query y se almacena en una variable*/

$result = $mysql->query($sql);

/*Retorna la representación JSON del valor dado*/ 

echo json_encode([$id]);

?>