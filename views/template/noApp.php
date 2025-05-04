<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AbFilmes</title>

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-900 text-gray-400">
<header class="border-b-1 border-b-gray-700">
        <nav class="mx-auto px-10 flex items-center justify-between py-5">
            <div>
                <img src="./assets/logo.svg" alt="" />
            </div>
            <ul class="flex items-center gap-4">
                <li><a href="/" class="flex gap-1 hover:text-purple-400">
                    <img src="/assets/popcorn.svg" alt="">
                    <span class="">Explorar</span>
                </a></li>
                <?php if(auth()): ?>
                    <li><a href="/meus-filmes" class="flex gap-1 bg-gray-700 px-3 py-2 rounded-lg text-purple-400">
                        <img src="./assets/claquete.svg" alt="">
                        <span>Meus Filmes</span>
                    </a></li>
                <?php endif; ?>
            </ul>

            <ul>
                <?php if(auth()): ?>
                    <li class="flex items-center gap-2">
                        <span>Oi, <?=auth()->nome?></span>
                        <a href="/logout">
                            <img src="/assets/logout.svg" alt="" class="px-2 py-2 border rounded-lg hover:border-purple-500 transition-colors">
                        </a>
                    </li>
                    <?php else: ?>
                    <li><a href="/login" class="hover:text-purple-400">Fazer login</a></li>
                <?php endif; ?>
            </ul>
        </div>
        </nav>
</header>

    <main class="mx-auto">
        <?php require "views/{$view}.view.php"; ?>
    </main>
</body>
</html>