<?php

/*Requiere el archivo de configuracion con la coexion a la DB*/
require 'db_config.php';


/*Trae el id del elemento que se desea modificar mediante el metodo post */

$id  = $_POST["id"];
$post = $_POST;

/*Se crea la sentencia SQL que ejecutara la modificación en la DB */

$sql = "UPDATE items SET title = '".$post['title']."' ,description = '".$post['description']."' WHERE id = '".$id."'";

/* convierte la información a formato query y se almacena en una variable*/

$result = $mysql->query($sql);

/*Muestra la como ya quedo la informacion de la tabla despues de haberse realizado el update*/

$sql = "SELECT * FROM items WHERE id = '".$id."'"; 


$result = $mysql->query($sql);

/*Recupera una fila de resultados como un array implementando un permniso de PDO para almacenar errores*/

$data = $result->fetch(PDO::FETCH_ASSOC);


echo json_encode($data);


?>