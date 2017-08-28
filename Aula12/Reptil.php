<?php

require_once 'Animal.php';
class Reptil extends Animal {
    
    // Atributos
    private $corEscama;
    
    // Métodos Sobreposição
    
    public function locomover() {
        echo"<p>Rastejando</p>";
    }
    public function alimentar() {
        echo"<p>Comento coisa de reptil</p>";
    }
    public function emitirSom() {
        echo"<p>Som de lacoste</p>";
    }
    
    
    // Getters e Setters
    function getCorEscama() {
        return $this->corEscama;
    }

    function setCorEscama($corEscama) {
        $this->corEscama = $corEscama;
    }


}
