<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
</head>

<body>

    <?php

    $nome = 'Patrícia';

    $saudacao = 'Oi';

    $titulo = $saudacao . ' Portfolio do ' . $nome;

    $subtitulo = 'Seja bem vindo ao meu Portfolio!!';

    $ano = 2025;

    $projeto = 'Meu Portfolio';

    $finalizado = false; // true,1 ou false,0

    $dataDoProjeto = '2025-07-27';

    $descricao = 'Meu primeiro Portfolio. Escrito em PHP e HTML.';

    $projetos = [

        [
            "titulo" => "Meu Portfolio",
            "finalizado" => false,
            "ano" => 2025,
            "descricao" => "Meu primeiro Portfolio. Escrito em PHP e HTML.",
            "stack" => ["PHP", "HTML", "CSS"],
        ],

        [
            "titulo" => "Lista de Tarefas",
            "finalizado" => true,
            "ano" => 2025,
            "descricao" => "Lista de Tarefas. Escrito em PHP e HTML.",
            "stack" => ["PHP", "HTML", "CSS"],
        ],

        [
            "titulo" => "Controle de Leitura de Livros",
            "finalizado" => true,
            "ano" => 2024,
            "descricao" => "Lista de livros. Escrito em PHP e HTML.",
            "stack" => ["PHP", "HTML", "CSS"],
        ],

        [
            "titulo" => "Mais um projeto",
            "finalizado" => false,
            "ano" => 2026,
            "descricao" => "Mais um projeto. Escrito em PHP e HTML.",
            "stack" => ["PHP", "HTML", "CSS"],
     ],
    ];

    function verificarSeEstaFinalizado($p)
    {

        if ($p['finalizado']) {

            return '<span style="color: green;">✅ finalizado</span>';
        }

        return '<span style="color: red;">⛔ não finalizado</span>';
    }

    $filtrarProjetos = function ($projetos, $finalizado = null)
    {
        if (is_null($finalizado)) {
            return $projetos;
        }

        $filtrados = [];
        foreach ($projetos as $p) {
            if ($p['finalizado'] === $finalizado) {
                $filtrados[] = $p;
            }
        }
        return $filtrados;
    };

    function filtrar($itens, $chave, $valor)
    {
        $filtrados = [];
        foreach ($itens as $item) {
            if ($item[$chave] === $valor) {
                $filtrados[] = $item;
            }
        }
        return $filtrados;
    }

    function filtro($itens, $funcao)
    {
        $filtrados = [];
        foreach ($itens as $item) {
            if ($funcao($item)) {
                $filtrados[] = $item;
            }
        }
        return $filtrados;
    }

        $projetosFiltrados = $filtrarProjetos($projetos, $finalizado = null);

        // $projetosFiltrados = filtrar($projetosFiltrados, 'finalizado', valor: true);

    //    $projetosFiltrados = filtro($projetosFiltrados, function($p) {
    //     return $p['ano'] < 2027;
    //    });

       
        $projetosFiltrados = array_filter($projetosFiltrados, function($p) {
            return $p['ano'] < 2025;
        });

    ?>

    <h1><?= $titulo ?></h1>

    <p><?= $subtitulo ?></p>

    <p><?php echo $ano ?></p>

    <hr>

    <ul>

        <?php foreach ($projetosFiltrados as $projeto): ?>

            <div

                <?php if (! ((2024 - $ano) > 2)): ?>

                style="background-color: cadetblue"

                <?php endif; ?>>

                <h2><?= $projeto['titulo'] ?></h2>

                <p><?= $projeto['descricao'] ?></p>

                <div>

                    <div><?= $projeto['ano'] ?></div>

                    <div>Projeto:
                        <?= verificarSeEstaFinalizado($projeto) ?>
                    </div>

                </div>

            </div>

        <?php endforeach; ?>

    </ul>

</body>

</html>