<?php

class Bonus extends Funcionario{

    //fazendo uso do método protected
    public function verBonus(): string{
        return "Bônus do funcionário: ". $this->bonusCalculado() ."<br.>";
    }
}