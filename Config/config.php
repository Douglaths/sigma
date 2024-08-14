<?php const BASE_URL = "http://localhost:80/sigma/";


// Configura la salida de errores por pantalla
error_reporting(E_ALL);
ini_set('display_errors', 1);

//zona horaria
date_default_timezone_set('America/Bogota');

//Datos de conexión a Base de Datos
const DB_HOST = "localhost";
const DB_NAME = "db_sigma";
const DB_USER = "root";
const DB_PASSWORD = "";
const DB_CHARSET = "utf8";