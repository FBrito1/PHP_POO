<?php

require_once 'Animal.php';
class Mamifero extends Animal {
    // Atributos
    protected $corPelo;
    // Metodo de sobreposição
    public function emitirSom() {
        echo"<p>Som de mamífero</p>";
    }

}
