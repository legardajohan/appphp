<?php

// estructura switch

// $user = 'camilo';
// $age = 30; 

// switch ($user) {
//     case 'camilo':
//         echo 'Usted es el administrador!';
//         break;
//     case 'Johan': 
//         echo 'Usted es el proveedor';
//         break;
//     case 'Camilo': 
//         echo 'Usted es el cliente';
//         break; 
//     default:
//         echo 'Usted no tiene un rol  definido';
//         break;
// }

// Almacene en una variable un numero para que identifique 
// que dia de la semana es (1 --> Lunes, 2 --> Martes, .... , 5 --> Viernes)



// estructura while

// $n = 2;

// while ($n <= 20) {
//     if ($n % 4 == 0) {
//         echo $n . ' es multiplo de 4 <br>';
//     } else {
//         echo $n . '<br>';
//         //$n++;
//         //$n += 1; 
//     }
//     $n = $n + 2;
//     //$n += 2;
// }

// Escribir los numeros pares hasta el 20 
// Modifique su estructura, para que indique si 
// es multiplo de 4

// 2
// 4 es multiplo de 4
// 6
// 8 es multiplo de 4 
// .
// .
// 20




// Impriman los numeros primos del 1 hasta el 100
// divible 1 y por el mismo 

// Los numeros primos del 1 al 100 son: 
// n .... 100

// $n = 1; 
// $m = 2;
// $primo = 0;

$num = 1; // variable usada para ir hasta el 100
$i = 2; // variable entre la cual se va a dividir $num 
$primo = 0; // divisores de $num - lleva una cuenta

while ($num <= 100) { // contador de 1 a 100
    $primo = 0; // cada iteracion re estrablecemos el valor del contador de divisores
    while ($i < $num) { // implica que $i = divisores seran menores al numero ej: 5 toma divisores 2, 3, 4
        if ($num % $i == 0) { // si $num es divisible por alguno, no es primo
            $primo++; // cuenta los divisores
        }
        $i++; // iteramos de 1 en 1 los divisores
    }
    if ($primo == 0) { // validamos si el contador de divisores permanecio en 0
        echo $num . ' es primo <br>'; // imprimimos en pantalla los PRIMOS
    }
    $i=2; // re estrablecemos los divisores en 2 
    $num++; // aumentamos de 1 en 1 
}



// if ($primo == true) {
//     echo $num . ' es primo';
// } else {
//     echo $num . ' no es primo';
// }




// while ($n <= 100) { // 1, 2, 3, ... 100
//     while ($m < $n) { // 1, 2, 3 (3) 
//         if ($n % $m == 0) {
//             $primo++;
//             //echo $n . ' mod ' . $m . ' = ' . $n % $m . '<br>';
//         }
//         $m++;
//     }
//     if ($primo == 1) {
//         echo $n . ' mod ' . $m . ' = ' . $n % $m . '<br>';
//     }
//     $primo = 0;
//     $n++;
//     $m = 2;
// }


// do while 

// $a = 1; 
// $b = 1;

// do {
//     echo 'Hola UDENAR! <br>'; 
//     $a++;
// } while ($a <= 10); // false

// while ($b <= 10) {
//     echo 'Hola UDENAR - AppWeb! <br>'; 
//     $b++;
// }

// Imprimir en pantalla los multiplos de 3 con While y Do while hasta el 50

// $c = 1; 

// do {
//     if ($c % 3 == 0) {
//         echo $c . '<br>';
//     }
//     $c++;
// } while ($c <= 50);



// estructura for 

// impares del 1 al 25 -> de forma diferente

// for ($i=1; $i <= 25; $i = $i + 2) { 
//     echo $i . '<br>';
// }

// for ($i=1; $i <= 25; $i++) { 
//     if ($i % 2 !== 0) {
//         echo $i . '<br>';
//     }
// }

// fizz buzz fizzbuzz

// for ($i=1; $i <=100 ; $i++) { 
//     if ($i % 3 == 0 && $i % 5 == 0) {
//         echo 'FizzBuzz <br>';
//     } elseif ($i % 3 == 0) {
//         echo 'Fizz <br>';
//     } elseif ($i % 5 == 0) {
//         echo 'Buzz <br>';
//     } else {
//         echo $i . '<br>';
//     } 
// }

// expresion foreach 
// key              0         1        2        3         4       5   6
// $frutas = array('manzana', 'pera', 'tomate', 'mango', 'sandia', 100, 500);

// foreach ($frutas as $key => $value) {
//     echo $key . ' --> ' . $value . '<br>';
// }

// dias de la semana con su respectivo KEY o indice en un arreglo 

?>