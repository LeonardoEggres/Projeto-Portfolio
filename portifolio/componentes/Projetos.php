<?php
$projetos = [
    [
        'titulo' => 'Projeto Responsivo',
        'finalizado' => true,
        'ano' => 2024,
        'descricao' => 'Neste projeto criei uma página de transmissões de jogos do campeonato Brasileiro. O intuito desse projeto era práticar o que eu havia aprendido sobre responsividade na época.',
        'stack' => ['HTML', 'CSS'],
        'img' => '../Imagens/Projeto-responsivo.png',
        'alt' => 'Imagem do Projeto de responsividade'
    ],
    [
        'titulo' => 'Projetos',
        'finalizado' => true,
        'ano' => 2024,
        'descricao' => 'Neste projeto criei uma página de formulário para venda de celulares. O intuito desse projeto era práticar o que eu havia aprendido sobre inputs na época.',
        'stack' => ['HTML', 'CSS'],
        'img' => '../Imagens/Projeto-Formulario.png',
        'alt' => 'Imagem do Projeto de um formulario de venda de celulares'
    ],
    [
        'titulo' => 'Projetos',
        'finalizado' => true,
        'ano' => 2024,
        'descricao' => 'Neste projeto criei uma página de tributo ao jogador de futebol aposentado Andrea Pirlo. O intuito desse projeto era práticar o que eu havia aprendido sobre o básico de HTML e CSS na época.',
        'stack' => ['HTML', 'CSS'],
        'img' => '../Imagens/Projeto-Tributo.png',
        'alt' => 'Imagem do Projeto de tributo ao jogador Andrea Pirlo'
    ],
];

$colors = ['orange', 'sky']
?>

<?php foreach ($projetos as $projeto): ?>
    <div class="bg-slate-700 flex items-center rounded-2xl p-3 gap-x-3">
        <div class="w-1/5 flex items-center justify-middle m-2">
            <img src="<?= $projeto['img'] ?>" alt="<?= $projeto['alt'] ?>">
        </div>
        <div class="w-4/5">
            <div class="flex justify-between gap-3">
                <h3 class='text-2xl '>
                    <?= $projeto['titulo'] ?>
                    <?php if ($projeto['finalizado']): ?>
                        <span class="text-xs text-gray-400 opacity-50 italic mx-5">(finalizado em <?=$projeto['ano']?> ✅)</span>
                            <?php else: ?>🚧<span class="text-xs text-gray-400 opacity-50 italic mx-5">(em desenvolvimento 🚧)</span>
                        </span>
                    <?php endif; ?>
                </h3>
                <div class="space-x-1">
                    <?php foreach ($projeto['stack'] as $posicao => $tech): ?>
                        <span class="bg-<?= $colors[$posicao] ?>-900 text-<?= $colors[$posicao] ?>-400 rounded-md px-2 py-1 font-semibold text-sm"><?= $tech ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <div>
                <p class="leading-6 py-3">
                    <?= $projeto['descricao'] ?>
                </p>
            </div>
        </div>
    </div>
<?php endforeach; ?>