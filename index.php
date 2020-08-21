<?php
$game = [
    'objects' =>[
    [
        'x' => 500,
        'y' => 200,
        'class' => 'light_red',
        'on_fire' => true,
    ],
    [
        'x' => 550,
        'y' => 250,
        'class' => 'light_yellow',
        'on_fire' => true,
    ],
    [
        'x' => 600,
        'y' => 300,
        'class' => 'light_green',
         'on_fire' => true,
    ],
    [
        'x' => 650,
        'y' => 350,
        'class' => 'oven',
        'on_fire' => true,
    ],
   ],
];
//var_dump($game);
//foreach ($game['objects'] as  $value){
//   print$value['x'];
//
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Drinks</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"/>
    <link rel="stylesheet" href="/style.css"/>
</head>
<body>
<main>
    <div><?php foreach ($game['objects'] as $value): ?>
    <h2><?php print $value['class']; ?></h2>
        <?php endforeach ?>
    </div>
<!--    <div>-->
<!--            <h2>--><?php //print $game['objects'][0]['class']; ?><!--</h2>-->
<!--    </div>-->
</main>
</body>
</html>
