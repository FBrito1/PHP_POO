<?php

require_once 'Mamifero.php';
class Canguru extends Mamifero {
    // Métodos da classe
    public function usarBolsa(){
        echo"<p>Usando bolsa...</p>";
    }
    // Metodos de polimofirsmo
    public function locomover() {
        echo"<p>Pulando</p>";
    }
}
