<div class="mx-auto max-w-screen-2xl mt-10">
    <div class="mb-9 flex items-center justify-between">
        <h1 class="text-2xl text-gray-200 font-bold">Meus Filmes</h1>

        <a href="/novo-filme" type="submit" class="bg-purple-600 text-white text-center w-30 py-3 rounded-xl 
        hover:bg-purple-700 transition-colors cursor-pointer">
            + Novo
        </a>
    </div>
    <section class="grid grid-cols-5 gap-6 mb-10">
                
        <?php foreach($filmes as $filme){
            require 'partials/_filme.php';
        }?>

    </section>

</div>