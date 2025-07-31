<?php
    $projetos = [
        [
            'titulo' => 'Projeto 1',
            'descricao' => 'Sed vitae nunc mauris. Etiam dapibus mi arcu, et
            imperdiet neque pellentesque eu.',
            'ano' => 2024,
            'finalizado' => true,
            'stack' => ['PHP', 'Javascript', 'HTML', 'CSS'],
            'img' => '/img/projeto1.jpg',
        ],

        [
            'titulo' => 'Projeto 2',
            'descricao' => 'Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
            inceptos himenaeos. Nullam porta nisl augue, non sagittis arcu efficitur vitae.',
            'ano' => 2025,
            'finalizado' => false,
            'stack' => ['PHP', 'Javascript', 'HTML', 'CSS'],
            'img'=> '/img/projeto2.jpg',
        ],

        [
            'titulo' => 'Projeto 3',
            'descricao' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vitae nunc mauris. Etiam dapibus mi arcu, et
            imperdiet neque pellentesque eu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
            inceptos himenaeos. Nullam porta nisl augue, non sagittis arcu efficitur vitae.',
            'ano' => 2026,
            'finalizado' => true,
            'stack' => ['PHP', 'Javascript', 'HTML', 'CSS'],
            'img'=> '/img/projeto3.png',
        ],
        // Adicione mais projetos conforme necessário
    ];
?>

<?php foreach ($projetos as $projeto): ?>

<div class="bg-slate-800 rounded-lg p-3 flex items-center">
    <div class="w-1/5 flex justify-middle items-center">
        <img src="<?=$projeto['img']?>" alt="" class="h-40">
    </div>

    <div class="w-4/5 space-y-3">
        <div class="flex gap-3 justify-between">
            <h3 class="font-semibold text-xl">
                <?php if($projeto['finalizado']):?>
                    ✅
                <?php endif;?> 
                
                <?=$projeto['titulo']?> 
                
                <?php if($projeto['finalizado']):?>
                    <span class="text-sm text-gray-400">(finalizado em <?=$projeto['ano']?>)</span>
                <?php else:?>
                    <span class="text-sm text-gray-400">(em andamento)</span>
                <?php endif;?> 
            </h3>
            <div class="space-x-1">
                <?php $colors=['fuchsia','lime','sky','rose','amber', 'teal', 'purple', 'indigo'];
                    foreach ($projeto['stack'] as $posicao => $tecnologia) : ?>
                        <span class="bg-<?=$colors[$posicao]?>-400 text-<?=$colors[$posicao]?>-900 rounded-md px-2 py-1 font-semibold text-xs">
                        <?=$tecnologia?>
                        </span>
                <?php endforeach; ?>
            </div>
        </div>
        <p class="leading-6">
            <?=$projeto['descricao']?>
        </p>
    </div>
</div>

<?php endforeach; ?>