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
echo 'Hola! Mi nombre es ' . $name . ' y tengo ' . $age . ' años <br>';

// Operadores aritmeticos 

// echo '2 + 3 = ' . (2+3);
// echo '<br> 3 * 5 = ' . (3*5);

$a = 30;
$b = 15; 

echo '30 + 15 = ' . ($a + $b);
echo '<br> 30 * 15 = ' . ($a * $b);
echo '<br> 30 /15 = ' . ($a / $b);
echo '<br> 30 - 15 = ' . ($a - $b);
echo '<br> 5 % 3 = ' . (5 % 3); 
echo '<br> 2 ** 3 = ' . (2 ** 3); 

define ('curso', 'AppWeb en Servidor');
define ('password', 12345);

echo '<br> Mi constante es: ' . (curso);
echo '<br> La contraseña es: ' . (password);



// Igual ==, valor '9' == 9 
// Igual ===, valor - tipo 9 === 9
// Diferencias !=, valor 
// Diferencias !==, valor - tipo
// <, >, <=, >=


?>