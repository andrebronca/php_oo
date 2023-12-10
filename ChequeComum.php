<?php

class ChequeComum extends Cheque {

    public function calcularJuro(): string {
        $valorComJuro = $this->valor * 0.2 + $this->valor;

        //acessando o método da superclasse
        $valorOriginal = parent::converterReal($this->valor);
        $valorTotal = parent::converterReal($valorComJuro);
        return "Valor do cheque {$this->tipo}, original: R$ {$valorOriginal}, com juros: R$ {$valorTotal}<br>";
    }
}