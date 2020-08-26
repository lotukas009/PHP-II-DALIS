<?php
/**
// * Squares the number
// * @param int $x number
// * @return int squared number
// */
function square($x)
{
    return $x ** 2;
}
var_dump($_POST);


if (isset($_POST['enterNumber']) && is_numeric($_POST['enterNumber'])) {
    $answer = 'The result is following: ' . square($_POST['enterNumber']);
} else {
    $answer = 'Please enter the number';
}

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
        <div><p>Number squared</p></div>
        <div>
            <label for="skaicius">Enter number:</label>
            <input type="number" name="enterNumber" id="skaicius">
            <button name="submit">Submit</button>
        </div>
        <div>
          <p><?=$answer?></p>
        </div>
       </main>
</body>
</html>



