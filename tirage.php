<?php
$selection = explode(' ', trim($_POST['selection']));
$tirages = [];
for ($i = 0; $i < 6; $i++) {
    do {
        $tr = mt_rand(1, 50);
    } while (in_array($tr, $tirages));
    $tirages[] = $tr;
}

$bon = 0;
for ($i = 0; $i < 6; $i++) {
    if (in_array($tirages[$i], $selection)) {
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
        <input type="button" id="<?= $i ?>" value="<?= $tirages[$i] ?>" />
        <?php } ?>
    </div>
    <h2>Vous avez eu <?= $bon ?> bon(s) numéros</h2>
    <script>
        document.body.onload=function() {
            num="<?php echo implode(' ', $selection); ?>".split(" ");
            res="<?php echo implode(' ', $tirages); ?>".split(" ");
            i=0;
            j=0;
            tirer();
        }
        function tirer() {
            t=setTimeout("tirer()", 40);
            if (j<res[i]) {
                j++;
                document.getElementById(i).innerHTML = j;
            }
        }
    </script>
</body>
</html>