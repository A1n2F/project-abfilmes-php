<?php

class Validacao {

    public $validacoes;

    public static function validar($regras, $dados) {
        $validacao = new self;
    
        foreach ($regras as $campo => $regrasDoCampo) {            
            foreach ($regrasDoCampo as $regra) {
                $valorDoCampo = $dados[$campo];
                
                $validacao->$regra($campo, $valorDoCampo);
            }
        }

        return $validacao;
    }

    private function required($campo, $valor) {
        if(strlen($valor) == 0) {
            $this->validacoes [] = "O $campo é obrigatório.";
        }
    }

    private function email($campo, $valor) {
        if (! filter_var($valor, FILTER_VALIDATE_EMAIL)) {
            $this->validacoes [] = "O $campo é inválido.";
        }
    }

    public function naoPassou() {
        return sizeof($this->validacoes) > 0;
    }
}

?>