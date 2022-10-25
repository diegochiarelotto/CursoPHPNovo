<?php
//Sessões e cookies

//Criando sessão

// session_start();
// $_SESSION['nome'] = 'Diego';

 session_start();
 setcookie('nome','Diego',time() - (60*60*24),'/');

 echo $_COOKIE['nome'];
?>