<?php
$social = [
    ['href' => '#', 'src' => '../Imagens/linkedin-icon.png', 'alt' => 'Logo do LinkedIn'],
    ['href' => '#', 'src' => '../Imagens/facebook-icon.png', 'alt' => 'Logo do Facebook'],
    ['href' => '#', 'src' => '../Imagens/Instagram.png', 'alt' => 'Logo do Instagram'],
    ['href' => '#', 'src' => '../Imagens/x-icon.png', 'alt' => 'Logo do X (Twitter)']
]
?>

<section class="mx-auto max-w-screen-2xl px-3 py-6">
    <div class="flex justify-between">
        <div class="w-3/4 mt-10">
            <h1 class="text-3xl font-bold">Olá, meu nome é Leonardo</h1>
            <p class="text-xl leading-6 mt-6">Sou um estudante de Análise e Desenvolvimento de Sistemas, estou no 5º semestre e sonho em me tornar programador. Atualmente, estou focado em estudar tecnologias como PHP, JavaScript, Laravel e React para conquistar a minha tão sonhada primeira vaga. Hoje, trabalho na Olist ERP como jovem aprendiz na área de Customer Success.</p>
            <ul class="flex gap-x-3 mt-3">
                <?php foreach ($social as $rede): ?>
                    <li class=>
                        <a href="<?= $rede['href'] ?>" target="_blank">
                            <img class="h-8" src="<?= $rede['src'] ?>" alt="<?= $rede['alt'] ?>">
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="w-1/4 flex items-center justify-center">
            <div>
                <img class="h-80 -mt-8 ml-12" src="../Imagens/Leonardo.png" alt="Foto do criador do portfólio, Leonardo Eggres">
            </div>
        </div>
    </div>
</section>