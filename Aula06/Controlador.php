<?php


interface Controlador {
   public function ligar();
   public function desLigar();
   public function abrirMenu();
   public function fecharMenu();
   public function maisVolume();
   public function menosVolume();
   public function ligarMudo();
   public function delisgarMudo();
   public function play();
   public function pause();
}
