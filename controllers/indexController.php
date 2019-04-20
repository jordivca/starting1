<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class indexController extends Controller
{
    public function __construct() {
        parent::__construct();
    }


    
    public function index()
    {
        $post = $this->loadModel('post');
        
        
        $this->_view->posts = $post->getPosts();
        
        $this->_view->titulo='Portada';
        $this->_view->renderizar('index','inicio');
    }
}
?>