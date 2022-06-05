<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
</head>

<body>

    <form action="cadastro.php" method="get">

        <label for="nome">Nome: </label>
        <input type="text" id="nome" name="nome">

        <br>

        <label for="idade">Idade: </label>
        <input type="number" name="idade" id="idade">

        <br>

        <p>Gênero: </p>

        <input type="radio" id="mas" name="genero" value="Masculin">
        <label for="mas">Masculino</label>

        <input type="radio" id="fem" name="genero" value="Feminino">
        <label for="fem">Feminino</label>

        <input type="radio" id="out" name="genero" value="Outro">
        <label for="out">Outro</label>

        <br>

        <label for="email">Email: </label>
        <input type="email" name="email" id="email">

        <br>

        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha">

        <br>

        <input type="submit" value="Enviar">
    </form>
    <div class="itens">
        <a href="login.php">Login</a>
        <a href="dados.php">Cadastre-se</a>
        <a href="visualisar.php">visualisar</a>
    </div>
</body>

</html>