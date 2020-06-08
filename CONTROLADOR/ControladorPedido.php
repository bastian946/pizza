<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

include_once '../MODELO/INTER/InterfacePedido.php';


include_once '../MODELO/Pedido.php';

class ControladorPedido implements InterfacePedido{

    public function consultarPedido() {
        
    }

    public function ingresarPedido(Pedido $pedido) {
        
        //  arraylist aqui
    }
}

// TODO CODE

$cliente = unserialize($_SESSION["user"]);
$repartidor = new Repartidor("Perez juan", 983748374);
$tipoProducto = $_POST["tipoProducto"];

echo("Nombre cliente: ".$cliente->getNombre()."</br>");
echo("Num. cliente: ".$cliente->getTelefono()."</br>");
echo("Nombre repartidor: ".$repartidor->getNombre()."</br>");
echo("Num. repartidor: ".$repartidor->getTelefono()."</br>");
echo("Tipo producto: ".$tipoProducto."</br>");
