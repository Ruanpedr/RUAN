<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Passo 2</title>
</head>
<body>
    <h1>Cadastro - Passo 2</h1>
    <form action="fimcadastro.php" method="post">
        <input type="hidden" name="nome" value="<?php echo $_POST['nome']; ?>">
        <input type="hidden" name="sexo" value="<?php echo $_POST['sexo']; ?>">

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required minlength="5">
        <br><br>

        <label for="comentario">Comentário:</label>
        <textarea id="comentario" name="comentario" cols="30" rows="6"></textarea>
        <br><br>

        <input type="submit" value="Finalizar Cadastro">
    </form>
</body>
</html>
