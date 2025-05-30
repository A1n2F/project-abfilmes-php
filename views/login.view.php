<div class="grid grid-cols-2 h-screen">
    <div class="relative">
        <img src="/assets/Login.png" alt="" class="h-screen w-full">

        <div class="flex flex-col gap-2 absolute left-10 bottom-10">
            <p class="text-xl font-bold">ab filmes</p>
            <h1 class="text-2xl font-bold text-gray-200 max-w-[346px]">O guia definitivo para os amantes do cinema</h1>
        </div>
    </div>

    <div class="flex flex-col items-center justify-center">
        <div class="bg-gray-800 px-2 py-3 rounded-xl mb-14">
            <a href="/login" class="text-xl text-purple-600 bg-gray-700 font-semibold px-14 py-2 rounded-xl">
                Login
            </a>

            <a href="/registrar" class="text-xl text-gray-600 font-semibold px-14 py-2 rounded-xl">
                Cadastro
            </a>
        </div>

        <div>
            <h1 class="text-3xl text-gray-200 font-bold mb-6 text-center">Acesse sua conta</h1>

            <form method="POST">
                <div class="flex flex-col">
                    <label class="mb-1">Email</label>
                    <input 
                        type="email" 
                        name="email" 
                        placeholder="Email" 
                        class="border-gray-700 w-[360px] border-2 rounded-md bg-gray-900 px-2 py-2 focus:outline-none mb-4"
                    />

                    <label class="mb-1">Senha</label>
                    <input 
                        type="password" 
                        name="senha" 
                        placeholder="Senha" 
                        class="border-gray-700 w-[360px] border-2 rounded-md bg-gray-900 px-2 py-2 focus:outline-none mb-6"
                    />
                </div>

                <button type="submit" class="bg-purple-600 text-white text-center w-full py-3 rounded-xl 
                hover:bg-purple-700 transition-colors cursor-pointer">
                    Entrar
                </button>

                <?php if($validacoes = flash()->get('validacoes_login')): ?>
                    <div class="border-red-800 bg-red-900 text-red-400 px-4 py-1 rounded-xl border-2 mt-6 font-bold">
                        <ul>
                            <li>Erros abaixo:</li>

                            <?php foreach($validacoes as $validacao): ?>
                                <li><?=$validacao?></li>
                            <?php endforeach; ?>

                        </ul>
                    </div>
                <?php endif; ?>

            </form>
        </div>
    </div>
</div>