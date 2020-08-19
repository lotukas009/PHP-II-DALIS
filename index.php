<?php
$money = rand (0,15);
$bokal_cost = 3;
$bokal_num = floor($money/$bokal_cost);
$total_cost = $bokal_num * $bokal_cost;
$h2 = "Total: $total_cost Eur";
$drinks_view = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Alus</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"/>
    <link rel="stylesheet" href="/style.css" />
</head>
<body>
<section>
    <?php for ($i = 1; $i <= $bokal_num; $i++): ?>
        <div class="drink"></div>
    <?php endfor; ?>
</section>
<h2><?php print $h2; ?></h2>
</body>
</html>

