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
    <h1>Selectionnez 6 cases pour démarrer la partie :</h1>

    <div id='grid'>
        <?php for ($i = 1; $i <= 49; $i++) { ?>
        <input type="button" value="<?= $i ?>" />
        <?php } ?>
    </div>
</body>
</html>