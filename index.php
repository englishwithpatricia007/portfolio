<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Meu Portfólio</title>
</head>
<body class="bg-slate-900 text-gray-200">

    <?php include 'componentes/header.php'; ?>

    <!--HERO-->
    <main class="mx-auto max-w-screen-lg min-h-20 px-3 py-6">

        <?php include 'componentes/hero.php'; ?>

        <section class="space-y-3 py-6" id="projetos">    
            <h2 class="text-2xl font-bold ">Meus Projetos</h2>

            <?php include './componentes/projetos.php'; ?>

        </section>
    </main>
    <footer class="mx-auto max-w-screen-lg min-h-20 px-3">
        <div class="border-t border-gray-600 pt-6 text-gray-400 text-sm">
            @ Copyright <?=date('Y')?> - Patrícia - Construído com ♡ por mim :)
        </div>
    </footer>
</body>
</html>