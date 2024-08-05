<?php

$dog_header="Dogprint";
$link_dogs="dogs.php";
$link_dogday="adogsday.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="7"> <!-- Auto refreshes every 7 secs -->
    <link rel="stylesheet" href="style.css">
    <title>Dogprint</title>
</head>
<body>
    <h1><?=$dog_header?></h1>

    <a href="<?=$link_dogs ?>">Dogs</a>
    <br>
    <a href="<?=$link_dogday ?>">A dogs day</a>


</body>
</html>