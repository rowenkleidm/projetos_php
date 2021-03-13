<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h2>Meu Form</h2>
        <form action="">
            <input type="text" name="<?php $n ?>" placeholder="seu nome aqui..." />
            <input type="submit" name="acao" value="Enviar" />
        </form>
        <pre>
        <?php
            require_once 'Pessoa.php';
            $pessoa1 = new Pessoa($n, $i, $s, $c)
            
            
        ?>
        </pre>
</body>
</html>