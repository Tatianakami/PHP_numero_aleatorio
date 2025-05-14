<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Números Aleatórios</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <main>
        <h1><i class="fas fa-random"></i> Gerador de Números Aleatórios</h1>
        <?php
        $min = 0;
        $max = 1000;
        $num = mt_rand($min, $max);
        echo "<p>Gerando um número aleatório entre <strong>$min</strong> e <strong>$max</strong>...</p>";
        echo "<p>O valor gerado foi: <strong>$num</strong></p>";
        ?>
        <button onclick="window.location.reload();" class="btn">
            <i class="fas fa-sync-alt"></i> Gerar Novamente
        </button>
    </main>
</body>
</html>
