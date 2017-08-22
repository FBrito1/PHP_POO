<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        require_once 'Caneta.php';
        
        
        $c1 = new Caneta("BIC", "Azul", 0.5); // chamada dos parametros ao criar um novo objeto // Mais simples
        $c2 = new Caneta("Faber", "Vermelha", 0.7);
        print_r($c1);
        print_r($c2);
        
        //$c1 ->setModelo("Bic");
        //$c1 ->setPonta(0.5);
        //echo "Eu tenho um caneta de modelo {$c1->getModelo()} com uma ponta de {$c1->Getponta()}";
        ?>
        </pre>
    </body>
</html>
