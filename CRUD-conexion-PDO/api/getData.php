<?php

/*Requiere el archivo de configuracion con la coexion a la DB*/
try{
    require 'db_config.php';

}catch (PDOException $e) {
    echo 'Excepción capturada: ', $e->getMessage(), self::$dsn, "\n";
}   

/* Determina el numero de filas que desea mostrarse en la pagina */

$num_rec_per_page = 10;

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
};
$start_from = ($page - 1) * $num_rec_per_page;

/*Trae la información que se encuantra en la tabla items y es organizada*/

$sqlTotal = "SELECT * FROM items";
$sql = "SELECT * FROM items Order By id desc LIMIT $start_from, $num_rec_per_page";

/* convierte la información a formato query y se almacena en una variable*/
$stmt = $mysql->query($sql);

/*alamacena una fila de resultados como un array implementando un permniso de PDO para almacenar errores*/

$result = $stmt->fetchall(PDO::FETCH_ASSOC);


$po = count($result);

/*El foreach permite solo que se ejecute informacion de tipo array */
foreach ($result as $fila) {
    $json[] = $fila;
}

$stmt->execute();

$data['data'] = $json;



$resulta = $mysql->query($sqlTotal);
$resulta->execute();

/*Obtiene el número de filas de un resultado*/

$resultar = $resulta->rowCount();
$data['total'] = $resultar;



echo json_encode($data);

?>