<?php

//exemplo com atributo e método private
class Funcionario {
    public string $nome;
    public float $salario;
    private string $salarioConvertido;  

    public function verSalario():string {
        return "Funcionário: {$this->nome}, salário: R$ {$this->converterSalario()} <hr>";
    }

    private function converterSalario():string {
        $this->salarioConvertido = number_format($this->salario, '2', ',', '.');
        return $this->salarioConvertido;
    }
}