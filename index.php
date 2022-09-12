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
        <?php for ($i = 1; $i <= 50; $i++) { ?>
        <input type="button" value="<?= $i ?>" id="<?= $i ?>" onClick="jouer(this.value)" />
        <?php } ?>
    </div>

    <div id="selection"></div>
    <form name="fo" method="POST" action="tirage.php">
        <input type='hidden' name="selection">
        <input type='submit' value="Jouer" name="jouer">
    </form>
    <script>
        document.fo.selection.value = "";
        i=0;
        function jouer(val) {
            if (i<6) {
            document.getElementById(val).style.visibility = "hidden";
            document.getElementById('selection').innerHTML += '<input type="button" value="'+val+'" />';
            document.fo.selection.value += val + " ";
            i++;
            }
            if (i == 6) {
                document.fo.jouer.style.visibility = 'visible';
            }
        }
    </script>
</body>
</html>