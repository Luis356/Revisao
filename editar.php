<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editando dados</title>
</head>

<body>

    <h1>Editando Dados</h1>
    <?php

    require_once("conexao.php");
    $id = $_GET["id"];

    $sql = "SELECT * FROM dados WHERE id='$id'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {

        $linha = $result->fetch_assoc();
    ?>
        <form method="post" action="altera.php">

            <input type="hidden" name="id" value="<?= $linha['id'] ?>" />

            <p>Nome: <input type="text" name="nome" value="<?= $linha['nome'] ?>" /></p>

            <p>Idade: <input type="number" name="idade" value="<?= $linha['idade'] ?>" /></p>

            <p>Gênero:
                <input type="radio" name="genero" value="Masculino" <?php
                                                                    if ($linha['genero'] == 1) echo 'Masculino'
                                                                    ?> />Masculino

                <input type="radio" name="genero" value="Feminino" <?php
                                                                    if ($linha['genero'] == 2) echo 'Feminino'
                                                                    ?> />Feminino

                <input type="radio" name="genero" value="Outro" <?php
                                                                if ($linha['genero'] == 3) echo 'Outro'
                                                                ?> />Outro

            </p>
            <p>Email: <input type="email" name="preco" value="<?= $linha['email'] ?>" /></p>

            <p>Senha <input type="password" name="senha" value="<?= $linha['senha'] ?>" /></p>

            <p><input type="submit" value="Alterar" /></p>
        </form>
    <?php
    } else {
        echo "<p>Nenhum registro encontrado para atualizar</p>";
    }
    ?>
    <div class="itens">
        <a href="index.php">Login</a>
        <a href="dados.php">Cadastre-se</a>
        <a href="visualisar.php">visualisar</a>
    </div>
</body>

</html>