<?php


abstract class Pessoa { // Classe abtrata não pode instanciar objetos. Herança
    protected $nome;
   protected $idade;
   protected $sexo;
   
   public final function fazerAniversario(){ // function final não pode ser subescrito pelas as suas subclasses
       $this->idade ++;
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
