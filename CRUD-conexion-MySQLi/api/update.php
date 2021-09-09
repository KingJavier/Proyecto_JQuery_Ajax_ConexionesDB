<?php

/*Requiere el archivo de configuracion con la coexion a la DB*/
require 'db_config.php';

/*Trae el id del elemento que se desea modificar mediante el metodo post */

$id  = $_POST["id"];
$post = $_POST;

/*Se crea la sentencia SQL que ejecutara la modificación en la DB */

$sql = "UPDATE items SET title = '".$post['title']."' ,description = '".$post['description']."' WHERE id = '".$id."'";

/* convierte la información a formato query y se almacena en una variable*/

$result = $mysqli->query($sql);

/*Muestra la como ya quedo la informacion de la tabla despues de haberse realizado el update*/

$sql = "SELECT * FROM items WHERE id = '".$id."'"; 


$result = $mysqli->query($sql);

/*Recupera una fila de resultados como un array asociativo*/

$data = $result->fetch_assoc();


echo json_encode($data);


?>