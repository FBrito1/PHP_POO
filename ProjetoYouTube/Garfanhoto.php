<?php
require_once 'Pessoa.php';
class Garfanhoto extends Pessoa {
    // Atributo
    private $login;
    private $totAssistido;
    // Construtor
    public function __construct($nome, $idade, $sexo, $login) {
        parent::__construct($nome, $idade, $sexo);
        $this->login = $login;
        $this->totAssistido = 0;
    }
    // Getter e Setters
    public function getLogin() {
        return $this->login;
    }

    public function getTotAssistido() {
        return $this->totAssistido;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function setTotAssistido($totAssistido) {
        $this->totAssistido = $totAssistido;
    }

        
    
    // Métodos
    public function assistirMaisUm(){
        $this->totAssistido ++;
    }
}
