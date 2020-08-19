<?php

$distance = rand (10,200);
$consuptions = 7.5;
$price_1 = 1.3;

$fuel_total = $distance * ($consuptions/100);
$price_trp = $price_1 * $fuel_total;
$li_1 = 'Nuvaziuota distancija: '

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php print 'As ' .  date('l')  . ' ir PHP'; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"/>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<main>
    <section>
        <h1>Keliones skaiciuokle</h1>
        <ul>
            <li><?php print $li_1 . $distance; ?></li>
            <li>Sunaudota <?php print $fuel_total; ?> l kuro.</li>
            <li>Kaina: <?php print $price_trp; ?> pinigu.</li>
        </ul>
    </section>
</main>
</body>
</html





