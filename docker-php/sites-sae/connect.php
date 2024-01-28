<?php
const DBHOST = 'dbmysql';
const DBUSER = 'admin';
const DBPASS = 'admin';
const DBNAME = 'web';

$dsn = 'mysql:host='. DBHOST . ';dbname=' . DBNAME;

try {
    $db = new PDO($dsn, DBUSER, DBPASS);

    echo "Connecté";

    
}catch(PDOException $exception){
    echo "Une erreur est survenue : " .$exception->getMessage;
}