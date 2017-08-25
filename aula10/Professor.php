<?php
require_once 'Pessoa.php';


class Professor extends Pessoa {
    // Atributos
    
    private $especialidades;
    private $salario;
    // Métodos
    
    public function receberAumento($aum){
        $this->salario += $aum;
    }
    // Getters e Setters
    
    public function getEspecialidades() {
        return $this->especialidades;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setEspecialidades($especialidades) {
        $this->especialidades = $especialidades;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }


    
}
