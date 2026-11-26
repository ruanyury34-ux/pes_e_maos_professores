<?php

// View> 404 Pagina não encontrada 

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Página não encontrada - <?php echo htmlspecialchars($dados['nome_site']); ?></title>
    <link rel="stylesheet" href="src/css/base.css">
</head>
<body>
    <main>
        <h1> 
            Pagina não encontrada
        </h1>
        <p> A pagina que você procura não existe </p>
        <p>
            <a href="index.php">Voltar para a página inicial</a>
        </p>
</body>
</html>