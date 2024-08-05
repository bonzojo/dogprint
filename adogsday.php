<?php

date_default_timezone_get();
$time = date("H:i");

$hour = date("G");

$brekkie_time = 8;
$walky_time = 10;
$treat_time = 12;
$dinner_time = 15;
$sleepy_time = 19;
$mad_hour = 22; //in between sleepy time through to brekkie time.


echo "The time is $time";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="7"> <!-- Refreshing every 7 secs -->
    <link rel="stylesheet" href="style.css">
    <title>A dogs day</title>
</head>
<body>
    <h1>A Dogs Day</h1>
    <h4>dog is currently thinking about...</h4>

    <p>
        <?php

        if ($hour >= $brekkie_time && $hour < $walky_time) {
            echo "It's time for breakfast. WoOf! Bacon sizzlers! Yum Yum!";
        } elseif ($hour >= $walky_time && $hour < $treat_time) {
            echo "It's time for a walk Woof! Woof! Let's go to the park!";
        } elseif ($hour >= $treat_time && $hour < $dinner_time) {
            echo "Wow the park was so much fun. I found a golf ball. Now can I have a tasty treat? Yum Woof!";
        } elseif ($hour >= $dinner_time && $hour < $sleepy_time) {
            echo "Time for dinner! I love the sound of my bowl being filled. Yum yum. Scof Burp!";
        } elseif (($hour >= $sleepy_time && $hour < $mad_hour) || ($hour >= 0 && $hour < $brekkie_time)) {
            echo "Zzzz.....zzz....Zzzz....zZzzZ";
        } elseif ($hour >= $mad_hour && $hour < 24) {
            echo "I feel so hyper. It doesn't matter that it is after sundown. It's mad hour before proper sleepy time. Lets play with the tennis ball. I just love being a dog!";
        }

        ?>
    </p>    
</body>
</html>