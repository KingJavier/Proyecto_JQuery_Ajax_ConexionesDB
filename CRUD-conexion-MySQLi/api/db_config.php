<?php

    //CONFIGURA LOS PARAMETROS DE CONEXIÓN CON LA BASE DE DATOS.

    define ('DB_USER', "root");
    define ('DB_PASSWORD', "");
    define ('DB_DATABASE', "h_blog");
    define ('DB_HOST', "localhost");

    //Crea la conexión mediante una conexión Mysql

    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

    //Sentencia basica para saber si esta mal la conexión.
    if($mysqli->connect_errno) {
    die("No se pudo conectar a la base de datos");
    }
       
?>