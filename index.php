<?php include('assets/admin.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Melhores cidades para Morar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h2>Os Melhores Jogos</h2>
    <table border="1">
        <tr>
            <th> Jogos Avaliados
                <a href="?tipo=nome&&ordem=asc">&#9650;</a>
                <a href="?tipo=nome&&ordem=desc">&#9660;</a>
            </th>

            <th>Downloads / Cópias
                <a href="?tipo=sigla&&ordem=asc">&#9650;</a>
                <a href="?tipo=sigla&&ordem=desc">&#9660;</a>
            </th>
        </tr>

        <?php
            foreach($games as $nome => $sigla) {
                echo "<tr><td>" .$nome. "</td>";
                echo "<td>" .$sigla. "</td></tr>";
            }
        ?>

    </table>

</body>
</html>