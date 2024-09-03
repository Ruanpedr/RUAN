<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Passo 1</title>
</head>
<body>
    <h1>Cadastro - Passo 1</h1>
    <form action="cadastro2.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required pattern="^[a-zA-Z]+\s[a-zA-Z]+$">
        <br><br>

        <label>Sexo:</label>
        <input type="radio" id="masculino" name="sexo" value="Masculino" required>
        <label for="masculino">Masculino</label>

        <input type="radio" id="feminino" name="sexo" value="Feminino" required>
        <label for="feminino">Feminino</label>
        <br><br>

        <input type="submit" value="Próximo">
    </form>
</body>
</html>
