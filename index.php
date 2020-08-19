<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php print 'As ' .  date('l')  . ' ir PHP'; ?></title>
    <style>
        body {
            margin: 0 auto;
            width: 50%;
        }

        .container {
            min-height: 100vh;
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .container > div:first-child{
            margin-right: 60px;
        }

        .bomb-content {
            background-image: url("https://www.pngkey.com/png/detail/194-1942123_png-small-red-circle.png");
            width: <?php print 10 * date('s'); ?>px;
            height: <?php print 10 * date('s'); ?>px;
            background-size: cover;
        }

        .explosion-content-00 {
            background-image: url("https://lh3.googleusercontent.com/proxy/OX0tnlMigoMe0J_B1s-s-dUuIECqELwdeOiM5za6rX9rCkv6C0fkxUnCk5vlTK0FQxi8ctoXgPhSposyuKWl4Ufx684GFwzIAvE-t3Fy0K71DjpacSwm4g");
            background-size: cover;
            width: 200px;
            height: 200px;
        }

        span {
            text-align: center;
            font-size: 30px;
            font-weight: bold;
            margin-top: 20px;
        }

    </style>
</head>
<body>
<section class="container">
    <div class="bomb-content"></div>
    <span><?php print date('s'); ?></span>
    <div class="explosion-content-<?php print date('s'); ?>"></div>
</section>
</body>
</html




