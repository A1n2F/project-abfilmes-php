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
                <li><a href="/" class="flex gap-1 bg-gray-700 px-3 py-2 rounded-lg hover:text-purple-300">
                    <img src="/assets/popcorn.svg" alt="">
                    <span class="text-purple-400">Explorar</span>
                </a></li>
                <li><a href="/meus-filmes.php" class="flex gap-1 hover:text-purple-400">
                    <img src="./assets/claquete.svg" alt="">
                    <span>Meus Filmes</span>
                </a></li>
            </ul>

            <ul>
                <li><a href="/login.php" class="hover:text-purple-400">Fazer login</a></li>
            </ul>
        </div>
    </header>

    <main class="mx-auto max-w-screen-2xl mt-10">
        <form class="flex items-center justify-between mb-10">
            <span class="text-2xl text-white font-bold tracking-wide">Explorar</span>
            <div>
                <input 
                    type="text" 
                    placeholder="Pesquisar filme" 
                    class="border-gray-700 w-[264px] border-2 rounded-md bg-gray-900 px-2 py-2 focus:outline-none"
                    name="pesquisar"
                />
                <button type="submit">Pesquisar</button>
            </div>
        </form>

        <section class="space-y-4">
            <div class="border-2 border-gray-300 w-[280px] h-[360px] rounded-xl p-5 relative">
                <div class="absolute bottom-5">
                    <h1 class="text-xl text-gray-200 font-semibold">Titulo do filme</h1>
                    <span class="flex gap-2">
                        <p class="text-gray-300">Gênero</p>
                        <p>.</p>
                        <p class="text-gray-300">Ano</p>
                    </span>
                </div>

                <div class="absolute right-2 top-2">
                    <span class="bg-black/70 rounded-full px-2.5 py-2 flex gap-1 items-center">
                        <h1 class="text-xl text-white font-bold">4,5</h1>
                        <p>/</p>
                        <h1 class="text-sm">5</h1>
                        <img src="/assets/star.svg" alt="">
                    </span>
                </div>
            </div>
        </section>
    </main>
</body>
</html>