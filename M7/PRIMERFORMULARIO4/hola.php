<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>titulo</title>
</head>
<body>
    <?php if ($_POST["num"] == "") {echo "Introdueix un número"; } else {?>
    <?php echo "Resultat:" . " " . $_POST["num"]; } ?>
</body>
</html>