<?php

//vamos a enviar a traves de un get url

        /*echo $_GET['url'];*/

//vamos a declarar constantes

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);//ruta raiz de la aplicacion con root
define('APP_PATH',ROOT.'application'.DS);  //definir el directorio de las aplicaciones
require_once APP_PATH.'Bootstrap.php'; //vamos a usar esta ruta para incluir los archivos
require_once APP_PATH.'Config.php';
require_once APP_PATH.'Controller.php';
require_once APP_PATH.'Model.php';
require_once APP_PATH.'Registro.php';
require_once APP_PATH.'Request.php';
require_once APP_PATH.'View.php';
require_once APP_PATH.'Database.php';


//echo ROOT;// devuelve la ruta donde esta el index del mvc
//echo '<pre>';print_r(get_required_files());

//$r = new Request();
//
//echo $r->getControlador().'<br>';
//echo $r->getMetodo().'<pre>';
//print_r($r->getArgs());

try{
    Bootstrap::run(new Request);
}
catch(Exception $e){
    echo $e->getMessage();
}




?>