<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejemplos con funciones y estructuras de control</h2>

    <?php
    require_once("repositorio.php");
    echo "<h3>Ejercicio 1</h3>";
    $resultado=transformar("Un texto ");
    echo $resultado;

    echo "<hr>";

    $totalFactura = calcularTotal(100, 4.95, 0.21);
    echo "<h4>El total de la factura es ".$totalFactura." € (IVA incluido)</h4>";
    $totalFactura2 = calcularTotal2(100, 4.95, "normal");
    echo "<h4>El total de la factura es ".$totalFactura2." € (IVA incluido en funcion del tipo)</h4>";

    echo "<hr>";

    $mensajeResultado=manipularString("en un lugar de la mancha");
    echo $mensajeResultado;

    echo "<hr>";

    echo "<h4>Ejercicio 1</h4>";
    $mayus= primeraMayuscula("convierto la primera letra de mi array en mayúscula");

    echo $mayus;

    echo "<hr>";

    echo "<h4>Ejercicio 2</h4>";

    echo "<hr>";

    echo "<h4>Ejercicio 3</h4>";
    $fecha = mostrarMes(5);
    echo $fecha;
    ?>



</body>
</html>
