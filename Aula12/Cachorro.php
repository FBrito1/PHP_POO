<?php
require_once 'Mamifero.php';
class Cachorro extends Mamifero {
    // metodo da classe
    public function enterrarOsso(){
        echo"<p>Entenrrando osso...</p>";
    }
    public function abanarrabo(){
        echo"<p>cristal está abanando o rabo...</p>";
    }
    // metodo poli
    public function emitirSom() {
        echo"<p>Latindo...</p>";
    }
}
