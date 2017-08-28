<?php
require_once 'Animal.php';

class Mamifero extends Animal{
    
    // Atributos
    private $corPelo;
    
    
    // Polimorfismo SObreposição Funções
    
    public function locomover() {
        echo"<p>Correndo</p>";
    }
    public function alimentar() {
        echo"<p>Mamando</p>";
    }
    public function emitirSom() {
        echo"<p>Som de mamífero</p>";
    }
    
    
    // Getter e Setters
    function getCorPelo() {
        return $this->corPelo;
    }

    function setCorPelo($corPelo) {
        $this->corPelo = $corPelo;
    }


}
