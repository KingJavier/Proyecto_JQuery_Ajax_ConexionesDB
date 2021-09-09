<?php

    //CONFIGURA LOS PARAMETROS DE CONEXIÓN CON LA BASE DE DATOS.

    $mysql=NULL;
    $hostname = 'localhost';
    $database = 'h_blog';
    $username = 'root';
    $password = "";
    $dsn = "mysql:host=$hostname;dbname=$database;charset=UTF8";

    //Crea la conexión mediante una conexión PDO empleando un Try cacth que capture los errores.

    try {
    $mysql = new PDO($dsn, $username, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    } catch (PDOException $e) {
    echo 'Excepción capturada: ', $e->getMessage(), self::$dsn, "\n";
    }   
    
?>