<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portifólio</title>
</head>
<body>

<?php
    $nome = 'Guilherme';
    $saudacao = 'Oi';
    $titulo = $saudacao . ' Portfolio do ' . $nome;
    $subtitulo = 'Seja bem vindo ao meu Portfolio!!';
    $ano = 2024;
?>
    
<h1><?= $titulo ?></h1>
<p><?= $subtitulo ?></p>
<p><?php echo $ano ?></p>

</body>
</html>
