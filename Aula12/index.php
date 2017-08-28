<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
       require_once 'Mamifero.php';
       require_once 'Reptil.php';
       require_once 'Peixe.php';
       require_once 'Ave.php';
       require_once 'Canguru.php';
       require_once 'Cachorro.php';
       require_once 'Cobra.php';
       require_once 'Tartaruga.php';
       require_once 'Goldfish.php';
       require_once 'Arara.php';
       
       $m = new Mamifero();
       $r = new Reptil();
       $p = new Peixe();
       $a = new Ave();
       $c = new Canguru();
       $k = new Cachorro();
       $t = new Tartaruga();
       
       $m->locomover();
       $c->locomover();
       $k->locomover();
       $t->locomover();
      
       
       
       /*
       $m->setPeso(85.3);
       $m->setIdade(2);
       $m->setMembros(4);
       $m->setCorPelo("branca");
       $m->locomover();
       $m->alimentar();
       $m->emitirSom();
       print_r($m);
       
       
       
       $p->setPeso(0.35);
       $p->setIdade(1);
       $p->setMembros(0);
       $p->setCorEscama("dourada");
       $p->locomover();
       $p->alimentar();
       $p->emitirSom();
       $p->soltarBolha();
       
       print_r($p);
       
       
       $a->setPeso(0.80);
       $a->setIdade(2);
       $a->setMembros(2);
       $a->setCorPena("rosa");
       $a->locomover();
       $a->alimentar();
       $a->fazerNinho();
       $a->emitirSom();
       
       print_r($a);
               */
        ?>
        </pre>
    </body>
</html>
