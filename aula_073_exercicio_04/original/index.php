<?php

    $erro = '';
    $sucesso = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {

        if(empty($_POST['text_value'])) {
            $erro = 'Campo de texto vazio';
        } else {
            $valor = $_POST['text_value'];

            if(is_numeric($_POST['text_value'])) {
                $file = fopen('dados_numericos.txt', 'a');
                fputs($file, $valor . PHP_EOL);
                fclose($file);
                $sucesso = 'Valor numérico guardado com sucesso.';
            } else if(is_string($_POST['text_value'])) {
                $file = fopen('dados_string.txt', 'a');
                fputs($file, $valor . PHP_EOL);
                fclose($file);
                $sucesso = 'Valor string guardado com sucesso.';
            }
        }
        
    }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Nível 1 - Exercício 04</title>
</head>
<body>
    
    <form action="index.php" method="post">
        <label for="text_id">Texto: </label>
        <input type="text" name="text_value" id="text_id">
        <input type="submit" value="Enviar">
    </form>

    <div>
        <?= !empty($erro) ? $erro : $sucesso ?>
    </div>

</body>
</html>