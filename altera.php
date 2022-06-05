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
    $email = $_GET["email"];
    $senha = $_POST["senha"];

    $sql = "UPDATE dados
    SET nome='$nome', idade='$idade', genero='$genero', email='$email', senha='$senha' WHERE id='$id'";

    $result = $con->query($sql);
    if ($con->affected_rows > 0) {
        echo "<h1>Alterado com suceso!</h1>";
    } else {
        echo "<h1>Ocorreu um Erro</h1>";
        echo "<p>{$con->error}</p>";
    }

    ?>

    <div class="itens">
        <a href="login.php">Login</a>
        <a href="dados.php">Cadastre-se</a>
        <a href="visualisar.php">visualisar</a>
    </div>
</body>

</html>