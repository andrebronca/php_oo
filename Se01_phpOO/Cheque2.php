<?php

//demonstrando que uma classe final não pode ser herdada
final class Cheque2 {

    //formato no PHP 8, código otimizado
    public function __construct(public float $valor, public string $tipo){}

    public function converterReal(float $valor): string {
        return number_format($valor, '2', ',', '.');
    }

    //método abstrato
    abstract function calcularJuro();

    
}