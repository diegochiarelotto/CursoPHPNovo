<?php
    include('Exemplo.php');

    //Instacia de objeto!
    $exemplo = new Exemplo();
    $exemplo->setVar1('Diego');
    echo $exemplo->pegaVar1();

    // $exemplo->var2 = 'Diego';    
    // echo $exemplo->var2;


    $exemplo2 = new Exemplo();
    $exemplo2->setVar1(' Camilo');
    echo $exemplo2->pegaVar1();


  /*
    $exemplo2->var2 = 'Camilo';
    

    // echo $exemplo->var2;
    // echo '<br/>';
    // echo $exemplo2->var2;

    //Acessando a classe pelo ::
    Exemplo::$var3 = 'Outra Variável';
    //echo Exemplo::$var3;
    //Para atributos podemos criar métodos
   
    Exemplo::metodoEstatico();
*/
   
?>