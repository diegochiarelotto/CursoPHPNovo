<?php
// INSERT PDO


    // DEFINE O FUSO HORARIO COMO O HORARIO DE BRASILIA
    date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO('mysql:host=localhost;dbname=md8bd','root','');

    // $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,'Diego','Camilo','2022-10-26 11:31:05')");

    

if(isset($_POST['acao'])){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $momento_registro = date('Y-m-d H:i:s');

    $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");

    $sql->execute(array($nome,$sobrenome,$momento_registro));
    echo 'Cliente inserido com sucesso!';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro no Banco</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nome" required >
        <input type="text" name="sobrenome" required >
        <input type="submit" name="acao" value="Enviar!" >
    </form>
</body>
</html>