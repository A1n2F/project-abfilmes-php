<?php

class Filme {
    public $id;
    public $titulo;
    public $genero;
    public $descricao;
    public $ano;
    public $usuario_id;
    public $nota_avaliacao;
    public $count_avaliacoes;
    public $imagem;

    public function query($where, $params){
        $database = new Database(config('database'));
        
        return $database->query(
            "SELECT 
            l.id, l.titulo, l.genero, l.ano, l.descricao, l.imagem,
            ifnull(round(sum(a.nota) / 5.0), 0) as nota_avaliacao,
            ifnull(count(a.id), 0) as count_avaliacoes
            FROM
            filmes l
            LEFT JOIN avaliacoes a on a.filme_id = l.id
            WHERE $where
            GROUP BY l.id, l.titulo, l.genero, l.ano, l.descricao, l.imagem", 
            self::class,
            $params
        );
    }

    public static function get($id) {
        return (new self)->query('l.id = :id', ['id' => $id])->fetch();
    }

    public static function all($filtro){
        return (new self)->query('titulo LIKE :filtro', ['filtro' => "%$filtro%"])->fetchAll();
    }

    public static function meus($usuario_id) {
        return (new self)->query('l.usuario_id = :usuario_id', ['usuario_id' => $usuario_id])->fetchAll();
    }
}

?>