<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Persona
 *
 * @author yo
 */
abstract class Persona {
     private string $nombre;
     private int $telefono;
    
    protected function __construct (strig $nombre, int $telefono){
        $this->setNombre($nombre);
        $this->setTelefono($telefono);
    }
    
    public function getNombre (){
        return $this->nombre;
    }
    
    public function setNombre (string $nombre){
       if(isset($nombre)){
        if(strlen($nombre) >= 3 && streln($nombre)<=50){   
       $this-> nombre = $nombre;
      }
     }
    }
    
    public function getTelefono (){
        return $this->telefono;
    }

    public function setTelefono (int $telefono){
        if(isset($telefono)){
            if(strlen($telefono)==9){
            $this->telefono = $telefono;
    }
   }
  }
}

