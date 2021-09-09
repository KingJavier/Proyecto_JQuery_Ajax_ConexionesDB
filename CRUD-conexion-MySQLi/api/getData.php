<?php

/*Requiere el archivo de configuracion con la coexion a la DB*/

require 'db_config.php';

/* Determina el numero de filas que desea mostrarse en la pagina */

$num_rec_per_page = 10;
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $num_rec_per_page;

/*Trae la información que se encuantra en la tabla items y es organizada*/

$sqlTotal = "SELECT * FROM items";
$sql = "SELECT * FROM items Order By id desc LIMIT $start_from, $num_rec_per_page"; 

/* convierte la información a formato query y se almacena en una variable*/
$result = $mysqli->query($sql);

/*alamacena una fila de resultados como un array */

while($row = $result->fetch_assoc()){
  $json[] = $row;
}

$data['data'] = $json;

/*Retorna false en caso de error. */

$result =  mysqli_query($mysqli,$sqlTotal);


/*Obtiene el número de filas de un resultado*/

$data['total'] = mysqli_num_rows($result);


echo json_encode($data);


?>