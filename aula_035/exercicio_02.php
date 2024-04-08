<?php

/*
    Usando como ponto de partida o array de produtos,
    inverte a ordem dos mesmos, acrescenta no final
    'maçã' e 'pêra' e apresenta numa ul.
*/

$produtos = ['arroz', 'batata', ' laranja'];
$sotudorp = array_reverse($produtos);
array_push($sotudorp, "maçã", "pêra");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>

<body>
    <ul>
        <?php foreach ($sotudorp as $sotudor): ?>
            <li>
                <?= $sotudor ?>
            </li>
        <?php endforeach; ?>
    </ul>

</body>

</html>