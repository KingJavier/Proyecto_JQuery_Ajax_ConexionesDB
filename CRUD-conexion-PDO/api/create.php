<?php

/*Requiere el archivo de configuracion con la coexion a la DB*/

require 'db_config.php';

/*Envia información mediante el metodo post */

$post = $_POST;

/*inserta informacion en la tabla items */

$sql = "INSERT INTO items (title,description) 
VALUES ('".$post['title']."','".$post['description']."')";
 
/* convierte la información a formato query y se almacena enun variable*/

$result = $mysql->query($sql);

/*Ordena la información traida en orden descendente*/ 
$sql = "SELECT * FROM items Order by id desc LIMIT 1"; 
$result = $mysql->query($sql);

/*Recupera una fila de resultados como un array asociativo implementando un permniso de PDO para almacenar errores*/
$data = $result->fetch(PDO::FETCH_ASSOC);

/*Retorna la representación JSON del valor dado*/ 
echo json_encode($data);

?>