<?php
//Switch e break (O break pode ser usado no loop (FOR, While, do e Foreach)

   /* $nome = 'Diego';

    switch($nome){
        case 'Diego':
        echo 'Minha varialvel e Diego';
        break;
        case 'Camilo':
        echo 'Minha variavel e Camilo';
        break;
    }
*/

    //loop FOR
/*
    for($i = 0; $i <= 10; $i++){
            echo $i;
            echo '<hr>';
        //Usando o brak no for para quebrar o loop
            if($i == 8)
            break;
    }
*/
/*
    $var = false;

if($var == true)
    $nome = 'Diego';
    
    $idade = 35;
  
    echo $idade; 
    echo '<br>';
    echo $nome;  
*/
for($i = 0; $i <= 10; $i++){
    if($i == 5)
        continue;
    echo $i;
    echo '<hr>';
}
?>