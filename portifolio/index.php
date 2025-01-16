<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-900 text-gray-100">

        <?php include('./Componentes/Header.php') ?>

    <main class="mx-auto max-w-screen-2xl min-h-20 px-3 py-6 mt-5">
        <?php include('./Componentes/Hero.php')?>
        <section class="flex flex-col gap-y-3">
            <?php include('./componentes/Projetos.php')?>
        </section>
    </main>
    <footer class="mx-auto max-w-screen-2xl min-h-20">
    <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm">
        © Copyright <?=date('Y')?>. Portfólio feito como exercicio de aprendizagem de PHP e Tailwind.
    </div>
</footer>
</body>

</html>