<div class="border-2 border-gray-300 w-[280px] h-[360px] rounded-xl p-5 relative">
    <div class="absolute bottom-5">
        <a href="/filme?id=<?=$filme->id ?>" class="text-xl text-gray-200 font-semibold hover:text-purple-600">
            <?=$filme->titulo ?>
        </a>
        <span class="flex gap-2">
            <p class="text-gray-300"><?=$filme->genero ?></p>
            <p>.</p>
            <p class="text-gray-300"><?=$filme->ano ?></p>
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

    <h2 class="text-2xl text-gray-200 font-bold">Avaliações</h2>
    <!-- <a class="bg-purple-600 text-white text-center w-40 py-3 rounded-xl 
    hover:bg-purple-700 transition-colors cursor-pointer flex items-center justify-center gap-2">
        <img src="/assets/emptyStar.svg" alt="">
        <span>Avaliar filme</span>
    </a> -->

    <div class="grid grid-cols-4 gap-4">
        <div class="col-span-3">lista</div>

        <?php if(auth()): ?>

        <div>
            <h1 class="text-3xl text-gray-200 font-bold mb-6 text-center">Avaliar filme</h1>

            <form method="POST" action="/avaliacao-criar">

                <div class="flex flex-col">
                    <input type="hidden" name="filme_id" value="<?=$filme->id?>" />
                    <label class="mb-1">Avaliação</label>
                    <textarea 
                        type="text" 
                        name="avaliacao" 
                        placeholder="Email" 
                        class="border-gray-700 w-[360px] border-2 rounded-md bg-gray-900 px-2 py-2 focus:outline-none mb-4"
                    ></textarea>

                    <label class="mb-1">Nota</label>
                    <select name="nota" class="border-gray-700 w-[360px] border-2 rounded-md bg-gray-900 px-2 py-2 focus:outline-none mb-6">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <button type="submit" class="bg-purple-600 text-white text-center w-full py-3 rounded-xl 
                hover:bg-purple-700 transition-colors cursor-pointer">
                    Salvar
                </button>

                <?php if($validacoes = flash()->get('validacoes')): ?>
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

        <?php endif; ?>

    </div>