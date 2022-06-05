<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluindo dados</title>
</head>

<body>

    <?php
    require_once("conexao.php");

    $id = $_GET["id"];

    $sql_excluir = "DELETE FROM dados WHERE id = '$id' ";

    $result = $con->query($sql_excluir);

    if ($result) {

        echo "<p>" . $con->affected_rows . " Registros Excluidos</p>";
    } else {

        echo "<p>Erro: " . $con->errno . "</p>";
    }

    $con->close();

    ?>

    <div class="itens">
        <a href="index.php">Login</a>
        <a href="dados.php">Cadastre-se</a>
        <a href="visualisar.php">visualisar</a>
    </div>
</body>

</html>