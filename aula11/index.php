<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Visitante.php';
        require_once 'Aluno.php';
        require_once 'Bolsista.php';
        require_once 'Professor.php';
        require_once 'Tecnico.php';
        //$p1 = new Pessoa; Exemplo
        /*$v1 = new Visitante();
        $v1->setNome("Fabio");
        $v1->setIdade(20);
        $v1->setSexo("Masculino");
        print_r($v1);*/
   
        $a1 = new Aluno();
        $a1->setNome("Pedro");
        $a1->setMatricula(1111);
        $a1->setIdade(16);
        $a1->setSexo("masc");
        $a1->setCurso("Informática");
        $a1->pagarMensalidade();
        print_r($a1);
        
        $b1 = new Bolsista();
        $b1->setMatricula(1112);
        $b1->setNome("Juelvis");
        $b1->setBolsa(12.5);
        $b1->setCurso("Programação de Jogos Digitais");
        $b1->setIdade(17);
        $b1->setSexo("masc");
        $b1->pagarMensalidade();
        print_r($b1);
        
        $p1 = new Professor();
        $p1->setNome("Guanajohns");
        $p1->setEspecialidade("Programação");
        $p1->setIdade(33);
        $p1->setSalario(1500);
        $p1->setSexo("masc");
        print_r($p1);
        
        $t1 = new Tecnico;
        $t1->setNome("Janis");
        $t1->setMatricula(1515);
        $t1->setCurso("Design");
        $t1->setIdade(18);
        $t1->setSexo("fem");
        $t1->setRegistroProfissional(2324);
        $t1->pagarMensalidade();
        print_r($t1);
        ?>
        </pre>
    </body>
</html>
