<?php

//exemplo com atributo e método private
/**
 * Superclasse: Funcionário
 * @method public verSalario():string Exibe o salário do funcionário
 * @author andré <bronca.andre@gmail.com>
 */
class Funcionario {
     /** @var string $nome Armazena o nome do funcionário */
    public string $nome;
    public float $salario = 0.0;  //acessado de fora da classe, pelo objeto instanciado
    private string $salarioConvertido;  //acessado somente na classe
    protected float $bonus = 2500;  //somente acessado pela classe e herança

    /** @return string Exibe o nome e salário do funcionário */
    public function verSalario(): string {
        return "Funcionário: {$this->nome}, 
            salário: R$ {$this->converterSalario($this->salario)} 
            <hr>";
    }

    /**
     * Retorna uma string do salário convertido para R$
     * @method private converterSalario($valor) 
     * @param float $valor
     * @return string 
     */
    private function converterSalario(float $valor): string {
        $this->salarioConvertido = number_format($valor, '2', ',', '.');
        return $this->salarioConvertido;
    }

    protected function bonusCalculado(): string{
        return $this->converterSalario($this->bonus + $this->salario);
    }
}