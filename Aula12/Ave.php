<?php

require_once 'Animal.php';
class Ave extends Animal {
    // Atributos
    private $corPena;
    // Métodos da classe
    public function fazerNinho(){
        echo"<p>Fazendo ninho...</p>";
    }
    // Métodos da sobreposição
    
    public function locomover() {
        echo"<p>Voando</p>";
    }
    public function alimentar() {
        echo"<p>Comendo frutas</p>";
    }
    public function emitirSom() {
        echo"<p>Som de ave</p>";
    }
    
    // Getters e Setters
    function getCorPena() {
        return $this->corPena;
    }

    function setCorPena($corPena) {
        $this->corPena = $corPena;
    }


}
