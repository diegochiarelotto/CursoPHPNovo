<?php

    date_default_timezone_set('America/Sao_Paulo');

    $pdo = new PDO('mysql:host=localhost;dbname=md8','root','');

    $id = 10;

    $sql = $pdo->prepare("UPDATE `clientes` set nome='Bernardo',sobrenome='Lopes' WHERE id=$id");

    if($sql->execute());
        echo 'Meu cliente atualizado com sucesso!';