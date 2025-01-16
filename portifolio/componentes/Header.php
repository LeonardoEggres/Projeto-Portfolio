<?php
$opcoesheader = [
    [
        'titulo' => 'Projetos',
        'href' => '#projetos',
    ],
    [
        'titulo' => 'Github',
        'href' => '#github',
    ],
    [
        'titulo' => 'LinkedIn',
        'href' => '#linkedin',

    ],
    [
        'titulo' => 'Contato',
        'href' => '#contato',

    ],
]

?>

<header class="flex mx-auto max-w-screen-2xl items-center px-3 py-6 justify-between">
    <div class="font-bold text-3xl ">
        🚀 Meu Portfólio
    </div>
    <div class="flex gap-x-6 text-lg">
        <?php foreach ($opcoesheader as $item): ?>
            <ul>
                <li class="transition-all duration-500 hover:text-xl"><a href="<?php echo $item['href']; ?>"><?php echo $item['titulo']; ?></a></li>
            </ul>
        <?php endforeach; ?>
    </div>
</header>