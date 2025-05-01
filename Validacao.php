<?php

class Validacao {

    public $validacoes = [];

    public static function validar($regras, $dados) {
        $validacao = new self;
    
        foreach ($regras as $campo => $regrasDoCampo) {            
            foreach ($regrasDoCampo as $regra) {
                $valorDoCampo = $dados[$campo];

                if(str_contains($regra, ':')) {
                    $temp = explode(':', $regra);
                    $regra = $temp[0];
                    $regraAr = $temp[1];

                    $validacao->$regra($regraAr, $campo, $valorDoCampo);
                } else {
                    $validacao->$regra($campo, $valorDoCampo);
                }
            }
        }

        return $validacao;
    }

    private function required($campo, $valor) {
        if(strlen($valor) == 0) {
            $this->validacoes [] = "$campo é obrigatório.";
        }
    }

    private function email($campo, $valor) {
        if (! filter_var($valor, FILTER_VALIDATE_EMAIL)) {
            $this->validacoes [] = "$campo é inválido.";
        }
    }

    private function min($min, $campo, $valor) {
        if(strlen($valor) <= $min) {
            $this->validacoes [] = "$campo precisa ter no mínimo de $min caracteres.";
        }
    }

    private function max($max, $campo, $valor) {
        if(strlen($valor) > $max) {
            $this->validacoes [] = "$campo precisa ter no máximo de $max caracteres.";
        }
    }

    public function naoPassou($nomeCustomizado = null) {
        $chave = 'validacoes';
        if($nomeCustomizado) {
            $chave .= '_'. $nomeCustomizado;
        }

        flash()->push($chave, $this->validacoes);

        return sizeof($this->validacoes) > 0;
    }
}

?>