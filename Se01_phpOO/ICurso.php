<?php

//criando interface
interface ICurso {
    //o método deve ser público na interface
    public function disciplina(string $nomeDisciplina): string;

    public function professor(string $nomeProfessor): string;
}