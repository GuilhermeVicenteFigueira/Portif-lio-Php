<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifolio</title>
</head>
<body>
    <?php
        $nome = "Guilherme";
        $saudacao = "Oi";
        $titulo = $saudacao . " portifolio do " . $nome;  
        $subtitulo = "Seja bem vindo ao meu portifolio";
        $ano = 2024;

        $projeto = "Meu Portifolio";
        $finalizado = false;
        $dataDoProjeto = "2025-03-09";
        $descricao = "Meu primeiro portifolio. Escrito em PHP e HTML";

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

        function verificarSeEstaFinalizado($p) {
            if (! $p["finalizado"] ) {
                 echo '<span style="color:red">❌ Não finalizado</span>';
            } else {
               echo '<span style="color:green">✅ Finalizado</span>';
            }
        }

        function filtrarProjetos($listaDeProjetos, $finalizado = null) {

            if (is_null($finalizado)) {
                return $listaDeProjetos;
            }


            $filtrados = [];
            
            foreach ($listaDeProjetos as $projeto) {
                if ( $projeto["finalizado"] === $finalizado) {
                    $filtrados [] = $projeto;
                }
            }

            return $filtrados;
        }
    ?>

    <h1><?= $titulo; ?></h1>  
    <p><?= $subtitulo; ?></p>
    <p><?= $ano ?></p>

    <hr/>

    <ul>
        <?php foreach (filtrarProjetos($projetos, ) as $projeto): ?>
            <div>
                <?php if ( ! (2024 - $ano) > 2): ?>
                    <style> background-color: burlywood; </style>
                <?php endif; ?>
                
                <h2><?= $projeto["titulo"]; ?></h2>
                <p><?= $projeto["descricao"]; ?></p>
                <p><?= $projeto["linguagem"]; ?></p>
                <div>
                    <div><?= $projeto["data"]; ?></div>
                    <div>Projeto: 

                        <?php verificarSeEstaFinalizado($projeto); ?> 

                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </ul>

</body>
</html>
