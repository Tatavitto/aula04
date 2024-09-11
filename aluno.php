<?php

    class Aluno {
    public $nome;
    public $sobrenome;
    public $dataNascimento;
    public $matricula;

    public function __construct($nome, $sobrenome, $dataNascimento, $matricula) {
	   $this->nome = $nome;
       $this->sobrenome = $sobrenome;
	   $this->dataNascimento = $dataNascimento;
	   $this->matricula = $matricula;
    }
    
    public function idade() {
        $dataNascimento = new DateTime($this->dataNascimento);
        $dataAtual = new DateTime();
        $idade = $dataAtual->diff($dataNascimento)->y;
        return $idade;
    }
    public function exibirInformacoes() {
        return "Nome: " . $this->nome . "<br>" .
               "Sobrenome: " . $this->sobrenome . "<br>" .
               "Nascimento: " . $this->dataNascimento . "<br>" .
               "Matricula: " . $this->matricula . "<br>" .
               "Idade: " . $this->idade() . " anos<br>";
    }
        public function getNome() {
        return $this->nome;
    }
        public function getIdade() {
        return $this->idade();
    }
    
}

?>