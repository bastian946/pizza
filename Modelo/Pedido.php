<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pedido
 *
 * @author basti
 */
include 'Persona.php';
include 'Cliente.php';
include 'Repartidor.php';

class Pedido {
    private Cliente $cliente;
    private Repartidor $repartidor;
    private Productos $tipoProducto;
    private int $fecha;
    
    public function __construct(Cliente $cliente, Repartidor $repartidor, Productos $tipoProducto){
        $this->cliente = $cliente;
        $this->repartidor = $repartidor;
        $this->tipoProducto = $tipoProducto;
        $this->fecha = time();
    }
}