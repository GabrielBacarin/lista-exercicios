<?php

$alunos = [
    ["nome" => "Ana", "idade" => 18, "nota" => 8.5],
    ["nome" => "Bruno", "idade" => 20, "nota" => 7.0],
    ["nome" => "Carlos", "idade" => 19, "nota" => 9.2],
    ["nome" => "Daniela", "idade" => 21, "nota" => 6.8],
    ["nome" => "Eduardo", "idade" => 22, "nota" => 5.9],
    ["nome" => "Fernanda", "idade" => 18, "nota" => 7.8],
    ["nome" => "Gabriel", "idade" => 20, "nota" => 8.1],
    ["nome" => "Helena", "idade" => 19, "nota" => 9.0],
    ["nome" => "Igor", "idade" => 23, "nota" => 6.4],
    ["nome" => "Juliana", "idade" => 21, "nota" => 7.5],
    ["nome" => "Lucas", "idade" => 20, "nota" => 8.9],
    ["nome" => "Mariana", "idade" => 18, "nota" => 9.4],
];

usort($alunos, function ($menorNota, $maiorNota) {
    return $maiorNota["nota"] <=> $menorNota["nota"];
});

$somaNotas = 0;
foreach ($alunos as $aluno) {
    $somaNotas += $aluno["nota"];
}

$media = $somaNotas / count($alunos)


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th> Nome </th>
            <th> Idade </th>
            <th> Nota </th>

        </tr>

        <?php foreach ($alunos as $listaAlunos) : ?>

            <tr>
                <td> <?= $listaAlunos["nome"] ?> </td>
                <td> <?= $listaAlunos["idade"] ?> </td>
                <td> <?= $listaAlunos["nota"] ?> </td>

            </tr>
        <?php endforeach; ?>

    </table>

    <p>Média da turma: <?= number_format($media, 2, ',', '.') ?></p>

</body>

</html>