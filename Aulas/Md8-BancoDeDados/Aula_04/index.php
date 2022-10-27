<?php

    date_default_timezone_set('America/Sao_Paulo');

    $pdo = new PDO('mysql:host=localhost;dbname=md8','root','');

    $id = 10;
    //Evitando SQL inject
    $sql = $pdo->prepare("DELETE FROM `clientes`  WHERE id=?");

    if($sql->execute(array($id)));
        echo 'Meu cliente foi deletado com sucesso!';