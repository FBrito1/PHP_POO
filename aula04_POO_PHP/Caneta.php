<?php

class Caneta {
   private $modelo; // definido atributo da caneta com publica, acesso a todos
   private $ponta; // definido atributo da ponta como privato, só posso acessar através do set/get
   private $tampada; //atribuda que verifica se a caneta está tampada ou não
   private  $cor; // atributo da cor
   
   
   function __construct($modelo, $ponta, $cor) {
       $this->modelo = $modelo;
       $this->ponta = $ponta;
       $this->cor = $cor;
       $this->setTampada(true);
   }

   function getModelo() {
       return $this->modelo;
   }

   function getPonta() {
       return $this->ponta;
   }

   function getTampada() {
       return $this->tampada;
   }

   function getCor() {
       return $this->cor;
   }

   function setModelo($modelo) {
       $this->modelo = $modelo;
   }

   function setPonta($ponta) {
       $this->ponta = $ponta;
   }

   function setTampada($tampada) {
       $this->tampada = $tampada;
   }

   function setCor($cor) {
       $this->cor = $cor;
   }

      
   
   
   
   
   
   
   /*
   
   public function Caneta($m, $c, $p){ // Método Construtor/ Pre-definições da clase ao ser criada um novo objeto
       $this-> modelo = $m; //parametros para a classe
       $this-> cor = $c;
       $this-> ponta = $p;
       $this-> tampar(); // metodo para a caneta já estar tampada quando criado o objeto
       
}
   
   
    public function tampar(){ //função que tampa a caneta
        $this-> tampada = true;
    }
        


    public function  getModelo() { //função para pegar um documento// "Exemplo". no caso não se aplica
       return $this-> modelo; // metodo vai retornar o atributo modelo definindo primariamente
   }
   public function setModelo($m){ // // metodo para aderir um modelo ao atributo com parametro para passagem de valores
       $this-> modelo = $m; // atributo modelo recebe o  que for requisitdo
   }
   
   public function getPonta (){
       return $this-> ponta;
   }
   public function setPonta ($p){
       $this-> ponta = $p;
   }
   
   */
}
