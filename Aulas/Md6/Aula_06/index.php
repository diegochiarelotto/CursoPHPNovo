<?php
   // Manipulando String PHP

   $conteudo = 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.';


//substr - >Serve  para recortar uma string
//echo substr($conteudo,0,20);



$nome = 'Diego Camilo Chiarelotto';
$nomes = explode(' ',$nome);

//implode> Junta um Array com um delimitador
$nomes = implode(' ',$nomes);

echo $nomes;
?>