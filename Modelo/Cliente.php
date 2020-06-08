<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Cliente extends Persona{
    private string $direccion;
    
    public function __construct(string $nombre, int $telefono) {
        parent::__construct($nombre, $telefono);
    }
    
    public function getDireccion(){
        return $this->direccion;
    }
    
    public function setDireccion(string $direccion){
        $this->direccion = $direccion;
    }
}
