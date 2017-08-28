<?php
require_once 'Aluno.php';

final class Tecnico extends Aluno {
   private $registroProfissional;
   
   final public function praticar(){
       echo "<p>Praticando...</p>";
   }
   function getRegistroProfissional() {
       return $this->registroProfissional;
   }

   function setRegistroProfissional($registroProfissional) {
       $this->registroProfissional = $registroProfissional;
   }


}
