<?php
function minusas($skaicius1, $skaicius2){
$suma = $skaicius1 - $skaicius2;
return $suma;
}
function daugyba($skaicius1, $skaicius2){
$suma = $skaicius1 * $skaicius2;
return $suma;
}
function dalyba($skaicius1, $skaicius2){
$suma = $skaicius1 / $skaicius2;
return $suma;
}
function proc($skaicius1, $skaicius2){
$suma= $skaicius1 % $skaicius2;
return $suma;
}
function atvirk($erikas)
{
    $lenght = strlen($erikas);
    for ($string = $lenght; $string >= 0; $string--) {
        echo substr($erikas, $string, 1);
    }
    echo "<br>";
}


