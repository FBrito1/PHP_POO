<?php

require_once 'Livro.php';

class Pessoa {
  // Atributos
   private $nome;
   private $idade;
   private $sexo;
   
   // Métodos 
   
   public function fazerNiver(){
       $this->setIdade($this->getIdade() + 1);
   }
   // Construtores 
   function __construct($nome, $idade, $sexo) {
       $this->nome = $nome;
       $this->idade = $idade;
       $this->sexo = $sexo;
   }
   // Getters e Setters
   function getNome() {
       return $this->nome;
   }

   function getIdade() {
       return $this->idade;
   }

   function getSexo() {
       return $this->sexo;
   }

   function setNome($nome) {
       $this->nome = $nome;
   }

   function setIdade($idade) {
       $this->idade = $idade;
   }

   function setSexo($sexo) {
       $this->sexo = $sexo;
   }


    
}
