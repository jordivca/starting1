<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

abstract class Controller
{
  
    protected $_view;
    public function __construct() {
        $this->_view = new View(new Request);
    }


    abstract public function index();
    
    protected function loadModel($modelo)
    {
        $modelo = $modelo.'Model';
        $rutaModelo = ROOT.'models'.DS.$modelo.'.php';
        
        if(is_readable($rutaModelo)){
            require_once $rutaModelo;
            $modelo = new $modelo;
            return $modelo;
        }
        else{
            throw new Exception('Error de modelo');
        }
    }
    
    protected function getLibrary($libreria)
    {
        $rutaLibreria = ROOT.'libs'.DS.$libreria.'.php';
        
        if(is_readable($rutaLibreria)){
        require_once $rutaLibreria;
    }
    else{
        throw new Exception('Error de libreria');
    }
    
    }        
}
?>