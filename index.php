<?php

// Asignación 

$name = "Johan"; // string
$lastname = 'Legarda';  // string
$age = 30; // number

$jobis = [
    'monday' => 'read',
    'sunday' => 'play the guitar'
]; 

// echo $name; 
//echo 'Hola! Mi nombre es ' . $name . ' y tengo ' . $age . ' años <br>';

// Operadores aritmeticos 

// echo '2 + 3 = ' . (2+3);
// echo '<br> 3 * 5 = ' . (3*5);

// Variables variables 

$appweb = 'curso'; // curso
$curso = 'servidor'; // servidor 

// echo 'Mi variable es: ' . $appweb;
// echo '<br> Mi variable variable es: ' . $$appweb;

$a = 10;
$b = 5; 

// echo '<br>La suma de 10 + 5 = ' . ((int)$a + (int)$b);
// echo '<br>La multiplicación de 10 * 5 = ' . ((int)$a * (int)$b);
// echo '<br>La resta de 10 - 5 = ' . ($a - $b);
// echo '<br>La división de 10 / 5 = ' . ((int)$a / (int)$b);
// echo '<br>El módulo de 10 % 5 = ' . ((int)$a % (int)$b); 
// echo '<br>La potencia de 10 ** 5 = ' . ($a ** $b);


// Constantes

// define ('curso', 'AppWeb en Servidor');
// define ('password', 12345);

// echo '<br> Mi constante es: ' . (curso);
// echo '<br> La contraseña es: ' . (password);



// Necesito que guarde su email y user de GitHub en variables y las muestren en pantalla 

// Concatenar dos variables de tipo string

$cadena1 = 'Hola hoy es ';
$cadena2 = 'Martes 6 de octubre';

//echo '<br>' . $cadena1 . $cadena2; 

// Incremento y decremento 

$num1 = 7;
$num1++; 

$num2 = 6; 
$num2--;

//echo 'El incremento de num1 es: ' . $num1 . ' y el decremento de num2 es: ' . $num2;


// Comparadores

// Igual ==, valor '9' == 9 

$x = '11'; 
$y = 11; 

if ($x == $y) {
    echo 'COMPARACION ==  X es igual a Y';
}

// Igual ===, valor - tipo 9 === 9

if ($x === $y) {
    echo 'COMPARACION ===  X es igual a Y';
} else {
    echo '<br> X no es igual a Y en valor y tipo';
}


// Diferencias !=, valor 

if ($x != $y) {
    echo '<br> X es diferente de Y';
} else {
    echo '<br> X es igual en valor a Y';
}

// Diferencias !==, valor - tipo

if ($a !== $y) {
    echo '<br> X es diferente en valor y tipo de Y';
} else {
    echo '<br> X es igual en valor y tipo a Y';
} 

// <, >, <=, >=

$z = 10;

if ($x > $z) {
    echo '<br> X es mayor que Z';
}


// Declarar 3 variables y comparar con IF si son iguales en valor (==) y en valor y tipo (===)
// Realizar una comparacion de un valor menor que otro 
// Ambos casos imprimir un resultado en pantalla 


?>