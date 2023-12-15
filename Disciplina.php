<?php

//usando atritubo e método estático
class Disciplina {
    
    public static float $media = 0.0;
    /*
    //formato antigo
    public string $aluno;
    public float $notaTrabalho;
    public float $notaProva;

    function __construct(string $aluno, float $notaTrabalho, float $notaProva)
    {
        $this->aluno = $aluno;
        $this->notaTrabalho = $notaTrabalho;
        $this->notaProva = $notaProva;
        //acessando o atributo estático, usa-se: self::
        self::$media = $this->notaProva + $this->notaTrabalho;
    } */

    //formato moderno, PHP 8
    function __construct(public string $aluno, public float $notaTrabalho,
        public float $notaProva){
            self::$media = $this->notaProva + $this->notaTrabalho;
    }

    public function situacao(): string {
        if(self::$media >= 6.0){
            return "Aluno(a) {$this->aluno} está <strong>Aprovado</strong><br>"
                ."Média: ". self::$media ."<hr>";
        } else {
            return "Aluno(a) {$this->aluno} está <strong>Reprovado</strong><br>"
                ."Média: ". self::$media ."<hr>";
        }
    }

    //criando um método static
    //vai ficar estranho, mas é para estudo
    static function situacaoAluno(float $nota):string {
        if($nota >= 6.0){
            return "Aluno(a) está <strong>Aprovado</strong><br>"
                ."Média: ". self::$media ."<hr>";
        } else {
            return "Aluno(a) está <strong>Reprovado</strong><br>"
                ."Média: ". self::$media ."<hr>";
        }
    }
}