<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <a href="Index.php">Pagina Principal</a>

    <?php

    require_once("conexao.php");

    $nome_d = $_GET["nome"];
    $idade_d = $_GET["idade"];
    $gen_d = $_GET["genero"];
    $emai_d = $_GET["email"];
    $senha_d = $_GET["senha"];

    $inserir = "INSERT INTO dados VALUES (null, '$nome_d', '$idade_d', '$gen_d', '$emai_d', '$senha_d')";

    $result = $con->query($inserir);

    ?>

    <div class="itens">
        <a href="index.php">Login</a>
        <a href="dados.php">Cadastre-se</a>
        <a href="visualisar.php">visualisar</a>
    </div>
</body>

</html>