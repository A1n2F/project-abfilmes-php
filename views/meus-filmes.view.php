<div class="mb-6 flex items-center justify-between">
    <h1 class="text-2xl text-gray-200 font-bold">Meus Filmes</h1>

    <a href="/novo-filme" type="submit" class="bg-purple-600 text-white text-center w-30 py-3 rounded-xl 
    hover:bg-purple-700 transition-colors cursor-pointer">
        + Novo
    </a>
</div>
<section class="grid grid-cols-5 gap-6">
            
    <?php foreach($filmes as $filme): ?>
        <div class="border-2 border-gray-300 w-[280px] h-[360px] rounded-xl p-5 relative">
            <div class="absolute bottom-5">
                <a href="/filme?id=<?=$filme->id?>" class="text-xl text-gray-200 font-semibold hover:text-purple-600">
                    <?=$filme->titulo?>
                </a>
                <span class="flex gap-2">
                    <p class="text-gray-300"><?=$filme->genero?></p>
                    <p>.</p>
                    <p class="text-gray-300"><?=$filme->ano?></p>
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
    <?php endforeach; ?>

</section>