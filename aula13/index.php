<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
        // Programa Principal
        require_once 'Mamifero.php';
        require_once 'Lobo.php';
        require_once 'Cachorro.php';
        
        $c = new Cachorro();
        $c->emitirSom();
        $c->reagirHora(11,45);
        $c->reagirHora(21,00);
        
        
        ?>
        </pre>
    </body>
</html>
