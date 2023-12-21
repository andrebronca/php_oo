<?php

//classe abstrata
//demonstração de método final que não pode ser sobrescrito na subclasse
abstract class Cheque {
    /*
    //formato antigo de codificação em PHP
    public float $valor;
    public string $tipo;

    public function __construct(float $valor, string $tipo) {
        $this->valor = $valor;
        $this->tipo = $tipo;
    }

    public function verValor(): string{
        return "Valor do cheque <strong>{$this->tipo}</strong> é: R$ {$this->valor}";
    } */

    //formato no PHP 8, código otimizado
    public function __construct(public float $valor, public string $tipo){}

    //determinando que esse método não pode ser sobrescrito na subclasse
    final public function converterReal(float $valor): string {
        return number_format($valor, '2', ',', '.');
    }

    //método abstrato
    abstract function calcularJuro();

    
}