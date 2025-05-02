<?php
    $sumNotas = array_reduce($avaliacoes, function($carry, $a){
        return ($carry ?? 0) + $a->nota;
    }) ?? 0;

    $sumNotas = round($sumNotas / 5);

    $notaFinal = str_repeat('★', $sumNotas)
?>

<div class="flex gap-30">
    <div class="flex gap-10">
    <div class="border-2 border-gray-300 w-[380px] h-[490px] rounded-xl"></div>

    <div class="">
        <a href="/" class="flex items-center gap-2">
            <img src="/assets/arrow.svg" alt="">
            Voltar
        </a>

        <h1 class="text-2xl text-gray-200 font-semibold mt-4">
            <?=$filme->titulo ?>
        </h1>

        <span class="flex gap-2 mt-6">
            <p>Categoria:</p>
            <p class="text-gray-300"><?=$filme->genero ?></p>
        </span>

        <span class="flex gap-2 mt-2">
            <p>Ano:</p>
            <p class="text-gray-300"><?=$filme->ano ?></p>
        </span>

        <span class="flex items-center gap-2 mt-4">
            <p class="text-2xl text-purple-500">
                <?=$notaFinal?>
            </p>

            <p>
                (<?=count($avaliacoes)?> Avaliações)
            </p>
        </span>

        <p class="max-w-[650px] mt-20">
            <?=$filme->descricao ?>
        </p>
    </div>

    </div>

    <?php if(auth()): ?>

    <div class="mt-12">
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

<div class="py-10">
    <h2 class="text-2xl text-gray-200 font-bold mb-4">Avaliações</h2>

    <div class="">
        <div class="col-span-3 gap-4 grid">
                <?php foreach($avaliacoes as $avaliacao): ?>
                    <div class=" bg-gray-800 rounded-xl flex items-start justify-between px-10 py-4 h-[100px]">
                        <div class="flex gap-50">    
                            <h1 class="text-lg text-gray-200 font-bold"><?=auth()->nome?></h1>
                            <?=$avaliacao->avaliacao?>
                        </div>
                        <div class="flex items-center bg-gray-800 px-3 py-1 rounded-lg gap-1">
                            <h1 class="text-xl text-gray-200 font-bold"><?=$avaliacao->nota?></h1>
                            <p>/5</p>

                            <img src="/assets/fullStar.svg" alt="">
                        </div>
                    </div>
                <?php endforeach; ?>
        </div>
    </div>

</div>