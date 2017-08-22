<?php

class Celular {
    var $cor;
    var $camera;
    var $tela;
    var $ligado;
   
 function acessar(){
     if ($this->ligado) {
         echo "<p> Celular ligado</p>";
     }else{
        echo "<p> Celular desligado</p>";
     }    
}       

 function ligar(){
     $this->ligado = true;
     
     
 }
 function desligar(){
     $this->ligado = false;
     
 }
 
}