    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clase 2 php</title>
</head>
<body>

    <h1>
    Clase 3 PHP / TP 2 / David Stilman

    </h1>

<?php
echo "1. Crear una variable n y validar que sea un número positivo";
?>
<br>

<?php

$n = 1; 

if (is_numeric($n) && $n > 0) {
    echo "El numero es valido y positivo.";
} else {
    echo "El numero no es valido y/ o no es positivo.";
}
?>

<br>
<br>


<?php
echo "2. Crear una variable n y validar que sea un número mayor a 1 y menor a 10";
?>
<br>

<?php

$n1 = 1; 


if (is_numeric($n1) > 1 && $n < 10) {
    echo "El número es mayor a 1 y menos que 10";
} else {
    echo "El número no es mayor a 1 y/ o mayor a 10.";
}
?>

<br>
<br>





<?php
echo "3 - Crear una variable n y validar que sea un número mayor a 10 o menor a 2";

?>
<br>

<?php

$n2 = 6; 

if ($n2 > 10 || $n2 < 2) {
    echo "Numero mayor a 10 o menorr a 2.";
} else {
    echo "Numero ingresado menor a 10 o mayor a 2.";
}
?>

<br>
<br>

<?php
echo "4. Crear dos variables, una con nombre numero1 y otra con el nombre de numero2. Si numero1 es
mayor a numero2, mostrar por pantalla, la suma y la resta. Si numero2 es mayor a numero1,
mostrar por pantalla la multiplicación, la división entera y el resto de la división. Si numero1 y
numero2 son iguales, mostrar el siguiente mensaje “Los números ingresados son iguales”.";

?>
<br>

<?php
$numero1 = 10; 
$numero2 = 10;
?>

<br>
<?php

if ($numero1 > $numero2) {
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;
    
    echo "Suma: $suma\n";
    echo "Resta: $resta\n";
} elseif ($numero2 > $numero1) {
    $multiplicacion = $numero1 * $numero2;
    $division = (int)($numero1 / $numero2);
    $resto = $numero1 % $numero2;
    
    echo "Multiplicacion: $multiplicacion\n";
    echo "Division: $division\n";
    echo "Resto: $resto\n";
} else {
    echo "Los números ingresados son iguales\n";
}
?>
    
</body>
</html>