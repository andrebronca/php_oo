<?php

//exemplo simples
class Funcionario {
    public string $nome;
    public float $salario;

    public function verSalario():string {
        return "Funcionário: {$this->nome}, salário: R$ {$this->converterSalario()} <hr>";
    }

    private function converterSalario():string {
        return number_format($this->salario, '2', ',', '.');
    }
}