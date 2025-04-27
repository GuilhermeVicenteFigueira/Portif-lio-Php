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

    $projetos = [
        [
            "titulo"=>"Meu Portifolio",
            "finalizado"=>false,
            "data"=>"2025-03-09",
            "descricao"=>"Meu primeiro portifolio. Escrito em PHP e HTML",
            "linguagem" => "PHP",
        ],
        [
            "titulo"=>"Estudos de Api RestFull Crud python",
            "finalizado"=>True,
            "data"=>"2025-01-09",
            "descricao"=>"Meu primeiro estudo com Api Rest",
            "linguagem"=> "Python",
        ],
        [
            "titulo"=>"Estudos de Api RestFull intermediario Login e Logout",
            "finalizado"=>True,
            "data"=>"2025-01-20",
            "descricao"=>"Meu Segundo estudo com Api Rest, Login e Logout, banco de dados e Codificação",
            "linguagem"=> "Python",
        ],
        [
            "titulo"=>"Projeto Player",
            "finalizado"=>True,
            "data"=>"2024-12",
            "descricao"=>"Minha prova de POO utilizando PHP oritado a objetos",
            "linguagem"=> "PHP",
        ],
        [
            "titulo"=>"Projeto Escritorio",
            "finalizado"=>True,
            "data"=>"2024-12",
            "descricao"=>"Umas das minhas de POO utilizando PHP oritado a objetos",
            "linguagem"=> "PHP",
        ],
    ];

?>

<h1><?= $titulo ?></h1>
<p><?= $subtitulo ?></p>
<p><?php echo $ano ?></p>

</body>
</html>
