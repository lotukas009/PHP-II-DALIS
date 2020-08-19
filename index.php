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
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .bomb-content {
            background-image: url("https://www.pngkey.com/png/detail/194-1942123_png-small-red-circle.png");
            width: <?php print 10 * date('s'); ?>px;
            height: <?php print 10 * date('s'); ?>px;
            background-size: cover;
            align-items: center;
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
<div class="container">
    <div class="bomb-content"></div>
    <span><?php print date('s'); ?></span>
</div>
</body>
</html>