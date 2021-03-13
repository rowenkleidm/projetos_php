<?php
    class Pessoa{
        private $nome;
        private $idade;
        private $sexo;
        private $cor;
        
        function __construct($n, $i, $s, $c) {
            $this->nome = $n;
            $this->idade = $i;
            $this->sexo = $s;
            $this->cor = $c;
        }
        
        function getNome() {
            return $this->nome;
        }

        function getIdade() {
            return $this->idade;
        }

        function getSexo() {
            return $this->sexo;
        }

        function getCor() {
            return $this->cor;
        }

        function setNome($nome): void {
            $this->nome = $nome;
        }

        function setIdade($idade): void {
            $this->idade = $idade;
        }

        function setSexo($sexo): void {
            $this->sexo = $sexo;
        }

        function setCor($cor): void {
            $this->cor = $cor;
        }



    }
    