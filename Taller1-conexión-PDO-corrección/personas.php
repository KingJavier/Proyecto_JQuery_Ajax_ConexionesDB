<?php
//require_once('DBconexion.php');
if( isset($_GET['id']) ) {
get_persons($_GET['id']);
} else {
die("Solicitud no válida.");
}
function get_persons( $id ) {

$jsondata = array();

//Desinfectar ipnut y preparar query
if( is_array($id) ) {
$id = array_map('intval', $id);
$querywhere = 'WHERE ID IN (' . implode( ',', $id ) . ')';
} else {
$id = intval($id);
$querywhere = 'WHERE ID = ' . $id;
}
$consulta = 'SELECT * FROM prueba_users ' . $querywhere;
//Cambia por los detalles de tu base datos

require_once('conexion.php');
$select = $db->query($consulta);
$result = $select->fetchAll(PDO::FETCH_ASSOC);
if ($result) {
$jsondata["success"] = true;
$jsondata["data"]["message"] = sprintf("Se han encontrado %d usuarios", count($result));
$jsondata["data"]["users"] = array();
foreach ($result as $users) {
$jsondata["data"]["users"][] = $users;
}} else {
$jsondata["success"] = false;
$jsondata["data"] = array(
'message' => 'No se encontró ningún resultado.'
);
}
header('Content-type: application/json; charset=utf-8');
echo json_encode($jsondata, JSON_FORCE_OBJECT);
}
exit();