<?php
    //Funções para manipular arrays

/*
//Array_merge

    $array1 = array("chave1" => "Valor1","chave2" => "valor2");
    $array2 = array("chave3" => "Valor3","chave4" => "valor4");
    $result = array_merge($array1, $array2);
    print_r($result);
*/

//Array_intersect_key
/*
    $array1 = array("chave1" => "Valor1","chave2" => "valor2");
    $array2 = array("chave1" => "Valor3","chave4" => "valor4");
    print_r(array_intersect_key($array1,$array2));
*/

//Array_map
function cubo($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cubo', $a);
print_r($b);

?>
