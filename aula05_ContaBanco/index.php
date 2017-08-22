<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require 'ContaBanco.php';
        $p1 = new ContaBanco(); // Mara
        $p1 ->abrirConta("CC");
        $p1 ->setDono("Mara");
        $p1 ->setNumConta(2020);
        $p1 ->depositar(500);
        $p1->fecharConta();
        $p1 ->sacar(550);
        $p1 ->fecharConta();
        print_r($p1);
        
        /*
        $p2 ->abrirConta("CP");
        $p2 ->setDono("Creuza");
        $p2 ->setNumConta(2222);
       
        
        $p1 ->depositar(300);
        $p2 ->depositar(500);
        
        $p2 ->sacar(100);
        
        $p1 ->pagarMensal();
        $p2 ->pagarMensal();
        
        $p1 ->sacar(338);
        $p2 ->sacar(530);
        
        $p1 ->fecharConta();
        $p2 ->fecharConta();
        
        print_r($p1);
        print_r($p2);
        */
        ?>
        </pre>
    </body>
</html>
