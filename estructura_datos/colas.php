<?php
//COLAS siguen el principio de primero en entrar, primero en salir

$arreglo_productos = ["mouse","audifonos","tablet","celular"];

array_push($arreglo_productos, "tv","laptop");

//quitar elemento
//shift = quitamos el primer elemento del arreglo
array_shift($arreglo_productos);

//clase PHP
$cola = new SplQueue();
//agregando elementos a la cola
$cola->enqueue("Next");
$cola->enqueue("springboot");
$cola->enqueue(".net");

//quitar el elemento (primero)
$cola->dequeue();
print_r($cola);