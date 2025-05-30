<div class="border-2 border-gray-300 w-[280px] h-[360px] rounded-xl relative">
    <div class="bg-gradient-to-t from-gray-900 w-[280px] h-[280px] absolute -bottom-2 rounded-xl"></div>
    <div class="">
        <img src="<?=$filme->imagem?>" alt="" class="w-[280px] h-[360px] rounded-xl"/>
    </div>
    <div class="absolute bottom-5 p-5">
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
            <h1 class="text-xl text-white font-bold"><?=$filme->nota_avaliacao?></h1>
            <p>/</p>
            <h1 class="text-sm">5</h1>
            <img src="/assets/star.svg" alt="">
        </span>
    </div>
</div>