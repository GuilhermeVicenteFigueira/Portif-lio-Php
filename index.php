<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portifolio<</title>
</head>
<body>
    <?php
        $nome = "Guilherme";
        $saudacao = "Oi";
        $titulo = $saudacao ."portifolio do" . $nome;
        $subtitulo = "Seja bem vindo ao meu portiflio";
        $ano = 2024;

        $projeto = "Meu Portifolio";
        $finalizado = false;
        $dataDoProjeto = "2025-03-09";
        $descricao = "Meu primeiro portifolio. Escrito em PHP e HTML";
    ?>

    <h1><?= $titlo;?></h1>
    <p><?= $subtitulo;?></p>
    <p><?php echo $ano ?></p>

    <hr/>

    <div>
        <?php if ( ! (2024 - $ano) > 2): ?>
           style="background-color: burlywood;"
        <?php endif; ?>
          
        <h2><?=$projeto?></h2>
        <p><?=$descricao?></p>
        <div>
            <div><?=$dataDoProjeto?></div>
            <div>Projeto: 
                
                <?php if(! $finalizado ): ?>
                    <span style= "color:red"> echo "❌ não finalizado"; </span>
                <?php else : ?>
                    <span style= "color:gren"> echo "✅ finalizado"; </span>
                <?php endif; ?>

            </div>
        </div>
    </div>

</body>

</html>