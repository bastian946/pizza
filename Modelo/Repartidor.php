<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Repartidor
 *
 * @author basti
 */
$session_star();
class Repartidor extends Persona{
    public function __construct(string $nombre, int $telefono) {
        parent::__construct($nombre, $telefono);
    }
}
