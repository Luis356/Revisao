<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Alterando</title>
</head>

<body>

    <?php

    require_once("conexao.php");

    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $genero = $_POST["genero"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $sql = "UPDATE dados
    SET nome='$nome', idade='$idade', genero='$genero', email='$email', senha='$senha' WHERE id='$id'";

    $result = $con->query($sql);

    ?>

    <div class="itens">
        <a href="Index.php">Login</a>
        <a href="dados.php">Cadastre-se</a>
        <a href="visualisar.php">visualisar</a>
    </div>
</body>

</html>