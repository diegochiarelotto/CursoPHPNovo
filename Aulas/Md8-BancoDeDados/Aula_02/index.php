<?php
    date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO('mysql:host=localhost;dbname=md8','root','');

    // $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (03,'Diego','Camilo','2022-10-25 20:00:01')");

    if(isset($_POST['acao'])){


    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $momento_registro = date('y-m-d H:i:s');
    
    $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (10,?,?,?)");


    $sql->execute(array($nome,$sobrenome,$momento_registro));
    echo 'cliente iserindo com sucesso';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Banco</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nome" id="" require >
        <input type="text" name="sobrenome" id="" require >
        <!-- <input type="datetime" name="momento_registro" id=""> -->
        <input type="submit" name="acao" value="Enviar!">
    </form>
</body>
</html>