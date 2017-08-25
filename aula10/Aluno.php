<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa {
    // Atributos
    
    private $matr;
    private $curso;
    
   // Métodos
    
    public function cancelarMart(){
        echo "<p>Matricula será cancelada</p>";
    }
    
    // Getters e Setters
    
    public function getMatr() {
        return $this->matr;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setMatr($matr) {
        $this->matr = $matr;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }


}
