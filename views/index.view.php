<form class="flex items-center justify-between mb-10">
    <span class="text-2xl text-white font-bold tracking-wide">Explorar</span>

    <div>
        <input 
            type="text" 
            name="pesquisar"
            placeholder="Pesquisar filme" 
            class="border-gray-700 w-[264px] border-2 rounded-md bg-gray-900 px-2 py-2 focus:outline-none"
        />
        <button type="submit" class="bg-gray-700 text-white text-center w-20 py-2.5 rounded-xl 
        hover:bg-gray-800 transition-colors cursor-pointer">
            Pesquisar
        </button>
    </div>
    
</form>

<section class="grid grid-cols-5 gap-6 mb-10">

    <?php foreach($filmes as $filme){
        require 'partials/_filme.php';
    } ?>

</section>

<div class="flex items-center justify-center">

<?php if(!$filmes): ?>
        <div class="flex flex-col items-center gap-2">
            <img src="/assets/claquete.svg" alt="" class="w-10 h-10">
            <h1 class="text-xl">
                Nenhum filme encontrado com 
                <span class="text-underline">"<?=$_GET['pesquisar']?>"</span>
            </h1>

            <h1 class="text-xl text-center">:(</h1>
            
            <h1>Que tal fazer outra busca?</h1>
        </div>
    <?php endif; ?>

</div>