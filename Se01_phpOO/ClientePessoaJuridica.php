<?php


class ClientePessoaJuridica extends Cliente{
    public int $cnpj;
    public string $nomeFantasia;

    public function verInformacaoEmpresa(): string {
        $dados = "Endereço da pessoa jurídica:<br>";
        $dados .= "Logradouro: {$this->logradouro}<br>";
        $dados .= "Bairro: {$this->bairro}<br>";
        $dados .= "Fantasia: {$this->nomeFantasia}<br>";
        $dados .= "CNPJ: {$this->cnpj}<br>";
        return $dados."<hr>";
    }
}