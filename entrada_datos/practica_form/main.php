<?php

function detalleImpresoras($forma_pago, $cantidad){
    $total = 0;
    $descuento = 0;
    $subtotal = 0;
    switch($forma_pago){
        case "efectivo":
            // $subtotal = $cantidad * 70;
            // $descuento = $subtotal * 0.10;
            // $total = $subtotal - $descuento;
            //$total = ($cantidad*70)-(($cantidad*70)*0.10);
            $descuento = 0.10;
            break;
        case "tarjeta de credito":
            //$total = ($cantidad*70)-(($cantidad*70)*0.05);
            $descuento = 0.05;
            break;
        case "vale":
            //$total = ($cantidad*70)-(($cantidad*70)*0.15);
            $descuento = 0.15;
            break;
        default:
            echo "Ingresa una forma de pago";
    }

    $subtotal = ($cantidad*70) * $descuento;
    $total = ($cantidad*70)-(($cantidad*70)*$descuento);
    
    echo "Detalle de compra:<br>Cantidad de impresoras: $cantidad<br>Descuento: $$subtotal<br>Total a pagar: $$total";
}

?>