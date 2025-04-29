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