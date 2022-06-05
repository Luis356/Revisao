<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Visualizar dados</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>id</th>
            <th>Nome</th>
            <th>idade</th>
            <th>Gênero</th>
            <th>Email</th>
            <th>Senha</th>
            <th colspan="2">Ação</th>

        </tr>

        <?php

        require_once("conexao.php");

        $sql = "SELECT * FROM dados";

        $result = $con->query($sql);

        while ($linha = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?= $linha["id"] ?></td>

                <td><?= $linha["nome"] ?></td>

                <td><?= $linha["idade"] ?></td>

                <td><?= $linha["genero"] ?></td>

                <td><?= $linha["email"] ?></td>

                <td><?= $linha["senha"] ?></td>

                <td><a href="editar.php?id=<?= $linha["id"] ?>">Alterar</a></td>
                <td><a href="excluir.php?id=<?= $linha["id"] ?>">Excluir</a></td>

            </tr>
        <?php
        }
        ?>
    </table>

    <div class="itens">
        <a href="login.php">Login</a>
        <a href="dados.php">Cadastre-se</a>
        <a href="visualisar.php">visualisar</a>
    </div>
</body>

</html>