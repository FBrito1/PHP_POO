<!DOCTYPE html>

    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
        <?php
       require_once 'Pessoa.php';
       require_once 'Livro.php';
       
       $p[0] = new Pessoa("Fabio", 20, "masculino");
       $p[1] = new Pessoa("Mara", 43, "Feminino");
       
       $l[0] = new Livro("PHP Básico", "José da Silva", 300, $p[0]);
       $l[1] = new Livro("POO com PHP", "Maria de Souza", 500, $p[0]);
       $l[2] = new Livro("PHP Avançado", "Ana Paula", 800, $p[1]);
       
        $l[0]->abrir();
        $l[0]->folhear(90);
        $l[0]->voltarPg();
        $l[0]->detalhes();
        
        
        $l[2]->abrir();
        $l[2]->folhear(100);
        $l[2]->detalhes();
        
        $l[1]->abrir();
        $l[1]->folhear(250);
        $l[1]->voltarPg();
        $l[1]->detalhes();
        
        ?>
        </pre>    
</body>
</html>
