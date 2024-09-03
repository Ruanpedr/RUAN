<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Concluído</title>
</head>
<body>
    <h1>Cadastro Concluído</h1>
    <p><strong>Nome:</strong> <?php echo "Nome: " . htmlspecialchars($_POST['nome']); ?></p>
    <p><strong>Sexo:</strong> <?php echo "Sexo: " . htmlspecialchars($_POST['sexo']); ?></p>
    <p><strong>Senha:</strong> <?php echo "Senha: " . htmlspecialchars($_POST['senha']); ?></p>
    <p><strong>Comentário:</strong> <?php echo "Comentário: " . htmlspecialchars($_POST['comentario']); ?></p>
</body>
</html>
