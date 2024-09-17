<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulo</title>
</head>
<body>
    <?php if($_POST["name"] == "") { echo "Escriu el teu nom"; } if ($_POST["email"] == "") { echo " Escriu el teu correu"; } else {?>
    <?php echo "Hola" . " " . $_POST["name"] ; ?>
    <?php echo "El teu correu és: "; echo $_POST["email"]; }?>
    
</body>
</html>