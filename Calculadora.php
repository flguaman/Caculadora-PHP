<?php
echo "Ingrese el primer número: ";
$num1 = readline();

echo "Ingrese el segundo número: ";
$num2 = readline();

echo "Seleccione la operación (+, -, *, /): ";
$operador = readline();

// Realizamos el cálculo según la operación
switch ($operador) {
    case '+':
        $resultado = $num1 + $num2;
        break;
    case '-':
        $resultado = $num1 - $num2;
        break;
    case '*':
        $resultado = $num1 * $num2;
        break;
    case '/':
        if ($num2 == 0) {
            echo "No se puede dividir por cero.";
        } else {
            $resultado = $num1 / $num2;
        }
        break;
    default:
        echo "Operador inválido.";
}

// Mostramos el resultado
if (isset($resultado)) {
    echo "El resultado es: " . $resultado;
}
