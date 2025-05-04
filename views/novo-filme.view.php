<a href="/meus-filmes" class="flex items-center gap-2 text-xl text-gray-200 hover:text-purple-500 transition-colors">
    <img src="/assets/arrow.svg" alt="" class="w-5 h-5" />
    <h1>Voltar</h1>
</a> 

<div class="mt-12">
        
    <form method="POST" action="/filme-criar" enctype="multipart/form-data">
        <div class="flex items-center justify-center gap-30">
                
            <div class="border-2 border-gray-300 w-[380px] h-[490px] rounded-xl flex flex-col items-center justify-center">
                    <input type="file" name="imagem" class="cursor-pointer">
                        <img src="/assets/download.svg" alt="" class="w-10 h-10 mt-5">
                        <h1 class="mt-2">Fazer upload</h1>
                    </input>
            </div>
        
            <div>
                <h1 class="text-3xl text-gray-200 font-bold mb-6">Cadastre um novo filme!</h1>

                <div class="w-[640px]">
                    <div class="flex flex-col">
                        <label class="mb-1">Título</label>
                        <input 
                            type="text" 
                            name="titulo" 
                            class="border-gray-700 border-2 rounded-md bg-gray-900 w-full px-2 py-2 focus:outline-none mb-4"
                        />
                    </div>

                    <div class="flex gap-3">
                        <div class="flex flex-col">
                            <label class="mb-1">Gênero</label>
                            <input
                                type="text" 
                                name="genero" 
                                class="border-gray-700 w-[314px] border-2 rounded-md bg-gray-900 px-2 py-2 focus:outline-none mb-4"
                            />
                        </div>

                        <div class="flex flex-col">
                            <label class="mb-1">Ano</label>
                            <input
                                type="text" 
                                name="ano" 
                                class="border-gray-700 w-[314px] border-2 rounded-md bg-gray-900 px-2 py-2 focus:outline-none mb-4"
                            />
                        </div>
                    </div>

                    <div class="flex flex-col">
                        <label class="mb-1">Descrição</label>
                        <textarea
                            type="text" 
                            name="descricao" 
                            class="border-gray-700 w-full h-[200px] border-2 rounded-md bg-gray-900 px-2 py-2 focus:outline-none mb-4"
                        ></textarea>
                    </div>
            
                    <div class="flex justify-end gap-3">
                        <a href="/meus-filmes" class="bg-gray-700 text-white text-center w-20 py-3 rounded-xl 
                        hover:bg-gray-800 transition-colors cursor-pointer">
                            Cancelar
                        </a>

                        <button type="submit" class="bg-purple-600 text-white text-center w-20 py-3 rounded-xl 
                        hover:bg-purple-700 transition-colors cursor-pointer">
                            Salvar
                        </button>
                    </div>

                    <?php if($mensagem = flash()->get('mensagem')): ?>
                        <div class="border-green-800 bg-green-900 text-green-400 px-4 py-1 rounded-xl border-2 mt-6 text-center">
                            <?=$mensagem?>
                        </div>
                    <?php endif; ?>

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
                </div>
            </div>
        </div>
    </form>
</div>