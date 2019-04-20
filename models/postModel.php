<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class postModel extends Model
{
    public function __construct() {
        parent::__construct();
    }
   
    public function getPosts()
    
    {
//        $post = array(
//            'id' => 1,
//            'titulo' => 'Titulo Post',
//            'cuerpo' => 'Cuerpo Post...'
        
        $post = $this->_db->query("select * from posts");
        return $post->fetchall();
        
        
        //return $post;
    }
            
}



?>