<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Criando objetos</h1>
    <?php
    require_once "Computador.php";
    
    /*
    FORMAS DE IMPORTAR 

    include  "";        Pode incluir mais de uma vez
    include_once "";    unica inclusão, interessante para classe
    require "";         
    require_once "";    declarar a classe uma única vez
    */

    $vixeMaria = new Computador();

    $vixeMaria->setProcessador("Intel i7");
    $vixeMaria->setRam("128GB");
    $vixeMaria->setEspacoArmazenamento("20YB");

    echo "<pre>";
    print_r($vixeMaria);
    echo "</pre>";

    ?>

</body>
</html>