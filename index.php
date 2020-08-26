<?php
$size = intval($_POST['slider'] ?? 30);
$message = empty($_POST) ? "Press button" : $size;
$img_src ='https://f0.pngfuel.com/png/836/695/girl-and-boy-illustration-png-clip-art-thumbnail.png'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BOOKS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"/>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<main>
    <form method="POST">
        <div><p>Change the picture size with slider</p></div>
        <div class="slider-box">
            <label for="skaicius">Size</label>
            <input class="slider" type="range" min="1" max="80" value="50" name="slider">
            <div>
                <button name="submit">Let's do it</button>
            </div>
        </div>
        <div>
            <p><?= $message; ?></p>
            <img class="picture" src="<?= $img_src; ?>" style="width: <?= $size; ?>em;">
        </div>
       </main>
</body>
</html>



