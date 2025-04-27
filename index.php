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

    function verificarStatus($p) {
        return $p['finalizado'] ? '<span style="color: green;">✅ Finalizado</span>' : '<span style="color: red;">⛔ Não Finalizado</span>';
}

?>

<h1><?= $titulo ?></h1>
<p><?= $subtitulo ?></p>
<p><?php echo $ano ?></p>

<hr>

<ul style="list-style: none; padding: 0;">
    <?php foreach($projetos as $projeto): ?>
        <div style="background-color: <?= !$projeto['finalizado'] ? 'burlywood' : 'lightgreen' ?>; padding: 10px; margin-bottom: 10px;">
            <h2><?= $projeto['titulo'] ?></h2>
            <p><?= $projeto['descricao'] ?></p>
            <div>
                <strong>Linguagem:</strong> <?= $projeto['linguagem'] ?><br>
                <strong>Data:</strong> <?= $projeto['data'] ?><br>
                <strong>Status:</strong> <?= verificarStatus($projeto) ?>
            </div>
        </div>
    <?php endforeach; ?>
</ul>

</body>
</html>
