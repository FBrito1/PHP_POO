<?php

require_once 'Animal.php';
class Peixe extends Animal {
    // Atributos
    private $corEscama;
    // Métodos da classe
    public function soltarBolha(){
        echo"<p>Soltando bolha</p>";
    }
    
    // Metodos de Sobreposição
    
    public function locomover() {
       echo"<p>Nadando</p>";
    }
    public function alimentar() {
        echo"<p>Comendo substâncias</p>";
    }
    public function emitirSom() {
        echo"<p>Peixe não faz som hehe</p>";
    }
    
    
    
    
    
    
    // Getters e Setters
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }


}
