<?php const BASE_URL = "http://localhost/sigma/";


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


//codeigniter
//Deliminadores decimal y millar Ej. 24,1989.00
const SPD = ".";
const SPM = ",";

//Datos envio de correo
const NOMBRE_REMITENTE = "SENA La Jagua";
const EMAIL_REMITENTE = "sena.lajagua@sena.edu.co";
const NOMBRE_EMPESA = "SENA";
const WEB_EMPRESA = "www.sena.edu.co";

const DESCRIPCION = "Servicio Nacional de Aprendizaje";
const SHAREDHASH = "Servicio Nacional de Aprendizaje";

//Datos Empresa
const DIRECCION = "La Jagua - Cesar, Colombia";
const TELEMPRESA = "3114689298";
const WHATSAPP = "3114689298";
const EMAIL_EMPRESA = "sena.lajagua@sena.edu.co";
const EMAIL_CONTACTO = "sena.lajagua@sena.edu.co";

const CAT_SLIDER = "1,2,3";
const CAT_BANNER = "4,5,6";
const CAT_FOOTER = "1,2,3,4,5";

//Datos para Encriptar / Desencriptar
const KEY = 'joseramos';
const METHODENCRIPT = "AES-128-ECB";

//Módulos
const MDADMINISTRADOR = 1;
const MDPROGRAMAS = 2;
const MDINICIO = 6;


//Páginas
const PINICIO = 1;


//Roles
const RADMINISTRADOR = 1;