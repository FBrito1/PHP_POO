<?php
require_once 'Lobo.php';

class Cachorro extends Lobo {
    // SObreposição
    function emitirSom() {
        echo"<p>AU au AU! </p>";
    }
    
    // No php não existe função por sobrecarga // Outros Recursos // Criação de metodos normal
    
    function reagirFrase($frase){
        if($frase == "Toma Comida" or $frase == "Olá" ){
            echo"<p>Abanar e latir</p>";
        }else{
            echo"<p>Rosnar</p>";
        }
    }
    function reagirHora($hora, $min){
        if ($hora<12 ){
            echo"<p>Abanar</p>";
        }elseif($hora>=18){
            echo"<p>Ignorar</p>";
        }else{
            echo"<p>Abanar e Latir</p>";
        }
    }
    function reagirDono($dono){
        if($dono == true){
            echo"<p>Abanar</p>";
        }else{
            echo"<p>Rosnar e Latir</p>";
        }
    }
    function reagirIdadePeso($idade, $peso){
        if($idade <5){
            if($peso < 10){
                echo"<p>Abanar</p>";
            }else{
                echo"<p>Latir</p>";
            }
        }else{
            if($peso < 10){
                echo"<p>Rosnar</p>";
            }else{
                echo"<p>Ignorar</p>";
            }
        }
    }
}
