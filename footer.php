<?php
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL ); 
/*
// Definir un nombre para cachear
$archivo = basename($_SERVER['PHP_SELF']);
$pagina = str_replace(".php", "", $archivo);

// Definir archivo para cachear (puede ser .php tambi�n)
$archivoCache = 'cache/'.$pagina.'.html';
// Cuanto tiempo deber� estar este archivo almacenado
$tiempo = 36000;

// Checar que el archivo exista, el tiempo sea el adecuado y muestralo
if (file_exists($archivoCache) && time() - $tiempo < filemtime($archivoCache)) {
    include($archivoCache);
    exit;
}
// Si el archivo no existe, o el tiempo de cacheo ya se venci� genera uno nuevo
ob_start();
*/
?>