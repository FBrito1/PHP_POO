<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        
         require_once 'Celular.php';
         $ob1 = new Celular;
         $obl -> cor = "Preto";
         $ob1 -> camera = "13mp";
         $ob1 -> tela = "4.5";
         $ob1 -> liga()= true;
         print_r($ob1);
         
         
         $ob2 = new Celular;
         $ob2 -> cor = "Vermelho";
         $ob2 -> camera = "10mp";
         $Ob2 -> tela = "4";
         $Ob2 -> desliga() = false;
         print_r($ob2);
         
         
        ?>
    </body>
</html>
