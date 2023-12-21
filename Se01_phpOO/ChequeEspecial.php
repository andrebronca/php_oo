<?php

class ChequeEspecial extends Cheque {

    public function calcularJuro(): string {
        $valorComJuro = $this->valor * 0.4 + $this->valor;
        $valorOriginal = $this->converterReal($this->valor);
        //outra forma de acessar o método da superclasse
        
        $valorTotal = $this->converterReal($valorComJuro);
        return "Valor do cheque {$this->tipo}, original: R$ {$valorOriginal}, com juros: R$ {$valorTotal}<br>";
    }
}