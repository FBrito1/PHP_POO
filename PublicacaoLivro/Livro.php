<?php

require_once 'publicacao.php';
require_once 'Pessoa.php';
class Livro implements Publicacao {
   
   // Atributos 
   private $titulo;
   private $autor;
   private $totPaginas;
   private $pagAtual;
   private $aberto;
   private $leitor;
   
   // Métodos
   
   public function detalhes(){
        echo "<hr>Livro ".$this->titulo. ", escrito por ". $this->autor;
        echo "<br>Páginas ".$this->totPaginas. " <br>Página atual ".$this->getPagAtual();
        echo "<br>Sendo lido por ". $this->leitor->getNome();
    }
    
   
   // COnstrutor
   
  function Livro($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->aberto = false;
        $this->pagAtual = 0;
        $this->leitor = $leitor;
    }

   
   // Getters e Setters
   

   function getAutor() {
       return $this->autor;
   }

   function getTotPaginas() {
       return $this->totPaginas;
   }

   function getPagAtual() {
       return $this->pagAtual;
   }

   function getAberto() {
       return $this->aberto;
   }

   function getLeitor() {
       return $this->leitor;
   }

   function getTitulo() {
       return $this->titulo;
   }

   function setTitulo($titulo) {
       $this->titulo = $titulo;
   }

      function setAutor($autor) {
       $this->autor = $autor;
   }

   function setTotPaginas($totPaginas) {
       $this->totPaginas = $totPaginas;
   }

   function setPagAtual($pagAtual) {
       $this->pagAtual = $pagAtual;
   }

   function setAberto($aberto) {
       $this->aberto = $aberto;
   }

   function setLeitor($leitor) {
       $this->leitor = $leitor;
   }

    public function abrir() {
        $this->setAberto(true);
    }

    public function avancarPg() {
        if($this->getPagAtual() == $this->totPaginas){
            $this->pagAtual = 0;
        }else{
            $this->setPagAtual($this->getPagAtual() + 1);
        }
    }

    public function fechar() {
        $this->setAberto(false);
    }

    public function folhear($p) {
        if($p > $this->totPaginas){
            $this->pagAtual = 0;
        }else{
            $this->pagAtual = $p;
        }
    }

    public function voltarPg() {
        
        if($this->pagAtual == 0){
            $this->pagAtual = 0;
        }else{
            $this->pagAtual --;
        }
    }

}
