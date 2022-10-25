<!-- Formulários, GET e POST -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <?php
    /*
    // Validação por GET

    if(isset($_GET['acao'])){
        $nome = $_GET['nome'];
        $email = $_GET['email'];
        echo 'O nome retornado foi: '.$nome.' e o e-mail retornado foi: '.$email;
        echo '<hr/>';
    }
    */    
    // Validação por POST
    if(isset($_POST['acao'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        echo 'O nome retornado foi: '.$nome.' e o e-mail retornado foi: '.$email;
        echo '<hr/>';
    }


    ?>
    <form method="post">
       <input type="text" name="nome" id="">
       <input type="email" name="email" id="">
       <input type="submit" name="acao" value="enviar">
    </form>  
</body>
</html>  
