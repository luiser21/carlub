<style>
.embed-container {
    position: relative;
    padding-bottom: 86.25%;
    height: 0;
    overflow: hidden;
}
.embed-container iframe {
    position: absolute;
    top:0;
    left: 0;
    width: 200%;
    height: 200%;
}
</style>

<?php
include('footer.php');
session_start();
include './clases/packege.php';
include('./clases/listados_admin.class.php');
 
$ob = new Index;
if( isset( $_GET['t'] ) ){
    switch( $_GET['t'] ){
        case '1':
            $ob->listar = 1;
        break;
        case '2':
            $ob->listar = 2;
        break;
        case '3':
            $ob->gratis = 1;
        break; 
    }
}
$ob->Iniciar();
include('header.php');
?>