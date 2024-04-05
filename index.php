<?php
    //import
    include_once "Adatbazis.php";
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magyar kártya</title>
</head>
<body>
    <?php
        $adatbazis = new Adatbazis();
        //lekérdezések
        $matrix = $adatbazis->adatLeker("kep", "szin");
        $adatbazis->megjelenit($matrix);
        $adatbazis->kartyaFeltolt();
        if ($adatbazis->sorokSzama("kartya") == 0) {
            $adatbazis->kartyaFeltolt();
        }
        $adatbazis->kapcsoltBezar();
    ?>
</body>
</html>