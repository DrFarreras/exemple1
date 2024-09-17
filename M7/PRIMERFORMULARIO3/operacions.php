<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo</title>
</head>
<body>
    <?php echo "Primer:" . $_POST["number1"] ;?>
    <?php echo "Segon:" . $_POST["number2"] ;?>
    <?php if($_POST["number1"] == "") {echo "Escriu el primer número"; } if($_POST["number2"] == "") {echo "Escriu el segon número"; } else {?>
    
    <?php if ($_POST["operacio"] == "suma") echo "El resultat és: " .$_POST["number1"] + $_POST["number2"];}  { ?>
    <?php if ($_POST["operacio"] == "multiplicacio") echo "El resultat és: " . $_POST["number1"] * $_POST["number2"];} ?>
    
</body>
</html>