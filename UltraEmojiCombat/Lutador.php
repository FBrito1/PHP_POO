<?php

class Lutador {
    
    // Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    
     // Métodos
    
    public function apresentar(){
        
        echo "<p>-----------------------</p>";
        echo "<p>CHEGOU A HORA!</p>";
        echo ("Lutador: ". $this->getNome());
        echo (" Origem: ". $this->getNacionalidade());
        echo ("<br>".$this->getIdade() . "  anos " );
        echo ($this->getAltura() . " m de altura ");
        echo (" Pesando ". $this->getPeso(). " KG ");
        echo ("<br>Ganhou: ". $this->getVitorias());
        echo (" Perdeu: ". $this->getDerrotas());
        echo (" Empatou: ". $this->getEmpates());
    }
    
    public function status(){
        echo "<p>-----------------------</p>";
        echo ($this->getNome());
        echo (" é um peso " . $this->getCategoria());
        echo ("<br>".$this->getVitorias(). " vitórias ");
        echo ($this->getDerrotas(). " derrotas ");
        echo ($this->getEmpates(). " empates ");
    }
    
    public function ganharLuta(){
        $this->setVitorias($this->getVitorias() + 1);
    }
    
    public function perderLuta(){
        $this->setDerrotas($this->getDerrotas() + 1);
    }
    
    public function empatarLuta(){
        $this->setEmpates($this->getEmpates() + 1);
    }
    
    // Métodos Especiais
    //Construtor
    
    public function Lutador($no,$na,$id,$al,$pe,$vi,$de,$em){
        $this-> nome = $no;
        $this-> nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
              
    }
    
    
    // Getters e Setters
    function getIdade() {
        return $this->idade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

        function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }
    
         
    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }

    
    private function setCategoria() {
         if ($this->peso < 52.2){
            $this->categoria = "Inválido";
        }elseif($this->peso <= 70.3){
            $this->categoria = "Leve";
        }elseif($this->peso <= 83.9){
            $this->categoria = "Médio";
        }elseif($this->peso <=120.2){
            $this->categoria = "Pesado";
        } else {
           $this->categoria = "Inválido";  
    }

  
    }

}
