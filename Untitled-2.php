<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
</head>
<body>
    <?php
        $titulo = "Portfólio";

        $projetos = [
            ["titulo"=> "Projeto 1", "descricao" => "Projeto 1","data"=> "2020","finalizado"=> "true"],
            ["titulo"=> "Projeto 2", "descricao" => "Projeto 2", "data"=> "2021","finalizado"=> "false"],
            ["titulo"=> "Projeto 3", "descricao" => "Projeto 3", "data"=> "2022","finalizado"=> "true"],
        ];
    ?>
    
    <h1><?=$titulo?></h1>
    <ul>
        <?php foreach ($projetos as $projeto) : ?>
            <?php if ($projeto['finalizado']) : ?>
                <li style="color: green;">
                    <?=$projeto['titulo']?>
                    <?=$projeto['descricao']?>
                    <?="Data: " . $projeto['data'];?>
                    Finalizado
                </li>
            <?php else : ?> 
                <li style="color: red;">    
                    <?=$projeto['titulo']?>
                    <?=$projeto['descricao']?>
                    <?="Data: " . $projeto['data'];?>
                    Não finalizado
                </li>
             <?php endif; ?> 
         <?php endforeach; ?>
    </ul>
    

</body>
</html>