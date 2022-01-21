<?php
function transformar($dato){ // Paso de argumento por valor
    return $dato." tranformado";
}

function calcularTotal($unidades, $precio, $iva){
    $subtotal= $unidades*$precio;
    $cuotaIva=$subtotal*$iva;
    $total=$subtotal+$cuotaIva;
    return $total;
}

function calcularTotal2($unidades, $precio, $tipoOperacion){
    $subtotal= $unidades*$precio;
    $cuotaIva=0;
    if($tipoOperacion=="normal"){
        $cuotaIva=$subtotal*0.21;
    }
    elseif($tipoOperacion=="reducido"){
        $cuotaIva=$subtotal*0.1;
    }
    else{
        $cuotaIva=$subtotal*0.04;
    }
    $total=$subtotal+$cuotaIva;
    return $total;
}

function manipularString($mensaje){
    return "Texto en mayúsculas: ".strtoupper($mensaje);

}


function primeraMayuscula($foo){
    //Retorna el dato con la primera letra en mayúscula
    
   return $foo = ucfirst($foo); 
}


function reemplazar($valorBuscado, $valorReemplazar){
    //Le das que buscas una a y que muestre una e
   // for($i=0; i<= $valorBuscado.length ; i++){
   //     if($valorBuscado[i]=="a"){
   //         $valorBuscado[i]="e";
   //     }
   //     $valorBuscado[i]=valorBuscado[i];
   // }
}


function mostrarMes($fecha){
    //Envias la fecha y retorna el mes en castellano
    return $fecha= strtotime($fecha);
}


function info(){
    //Muestra la versión de php y la versión del servidor
}


function numeroPrimo($numero){
    //Retorna si el número introducido es primo o no
}


function bisiesto($año){
    //Retorna si el año es bisiesto o no
}
