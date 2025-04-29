<?php

class Filme {
    public $id;
    public $titulo;
    public $genero;
    public $ano;

    public static function make($item) {
        $filme = new self();

        $filme->id = $item['id'];
        $filme->titulo = $item['titulo'];
        $filme->genero = $item['genero'];
        $filme->ano = $item['ano'];

        return $filme;
    }
}

?>