<?php
require_once 'Pessoa.php';

final class Professor extends Pessoa {
    private $especialidade;
    private $salario;
    
    public final function receberAumento(){
        echo"<p>Aumento de 10% concedido!</p>";
    }
    function getEspecialidade() {
        return $this->especialidade;
    }

    function getSalario() {
        return $this->salario;
    }

    function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    function setSalario($salario) {
        $this->salario = $salario;
    }


}
