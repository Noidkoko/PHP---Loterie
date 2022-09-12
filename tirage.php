<?php
$selection = explode(' ', trim($_POST['selection']));
$tirages = [];
for ($i = 0; $i < 6; $i++) {
    do {
        $tr = mt_rand(1, 50);
    } while (in_array($tr, $tirage));
    $tirage[] = $tr;
}

$bon = 0;
for ($i = 0; $i < 6; $i++) {
    if (in_array($tirage[$i], $selection)) {
        $bon++;
    }
}
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lottery</title>
</head>
<body>
    <h1>Tirage</h1>

    <h2>Numéros joués</h2>
    <div id="grid">
        <?php for ($i = 0; $i < count($selection); $i++) { ?>
        <input type="button" value="<?= $selection[$i] ?>" />
        <?php } ?>
    </div>
    <h2>Resultats du tirage</h2>
    <div id="grid">
        <?php for ($i = 0; $i < 6; $i++) { ?>
        <input type="button" value="<?= $tirages[$i] ?>" />
        <?php } ?>
    </div>
    <h2>Vous avez eu <?= $bon ?> bon(s) numéros</h2>
</body>
</html>