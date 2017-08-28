<?php
require_once 'Aluno.php';


class Bolsista extends Aluno {
    private $bolsa;
    
    public function renovarBolsa(){
        echo"<p>Bolsa renovada</p>";
    }
    public function pagarMensalidade() { // SObrepondo o método do aluno. PONTINHO VERDE.
        echo "<p>$this->nome é bolsista! Então paga com desconto.</p>";
        
    }
    
    function getBolsa() {
        return $this->bolsa;
    }

    function setBolsa($bolsa) {
        $this->bolsa = $bolsa;
    }


}
