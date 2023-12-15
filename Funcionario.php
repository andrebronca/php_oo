<?php

//exemplo com atributo e método private
class Funcionario {
    public string $nome;
    public float $salario = 0.0;  //acessado de fora da classe, pelo objeto instanciado
    private string $salarioConvertido;  //acessado somente na classe
    protected float $bonus = 2500;  //somente acessado pela classe e herança

    public function verSalario(): string {
        return "Funcionário: {$this->nome}, salário: R$ {$this->converterSalario($this->salario)} <hr>";
    }

    private function converterSalario($valor): string {
        $this->salarioConvertido = number_format($valor, '2', ',', '.');
        return $this->salarioConvertido;
    }

    protected function bonusCalculado(): string{
        return $this->converterSalario($this->bonus + $this->salario);
    }
}