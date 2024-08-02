<?php
    
    $dogs = [
        [
            'name' => 'Sherbet',
            'breed' => 'Springer Spaniel',
            'age' => 17,
            'is_alive' => false 
        ],
        [
            'name' => 'Yoki',
            'breed' => 'Yorkshire Terrier',
            'age' => 10,
            'is_alive' => false
        ],
        [
            'name' => 'Zeus',
            'breed' => 'Yorkshire Terrier',
            'age' => 13,
            'is_alive' => true
        ],
        [
            'name' => 'Hugo',
            'breed' => 'Maltese',
            'age' => 2,
            'is_alive' => true
        ]
    ];

    //Parse to Json
    $dog_json = json_encode($dogs);
    
    //Seperate into Variables
    $sherbet = "Name: " . $dogs[0]['name'] . "<br/>" . " Breed: " . $dogs[0]['breed'] . "<br/>" . " Age: " . $dogs[0]['age'] . "<br/>" . " Status: " . ($dogs[0]['is_alive'] ? 'Living' : 'Deceased');
    $yoki = "Name: " . $dogs[1]['name'] . "<br/>" . " Breed: " . $dogs[1]['breed'] . "<br/>" . " Age: " . $dogs[1]['age'] . "<br/>" . " Status: " . ($dogs[1]['is_alive'] ? 'Living' : 'Deceased');
    $zeus = "Name: " . $dogs[2]['name'] . "<br/>" . " Breed: " . $dogs[2]['breed'] . "<br/>" . " Age: " . $dogs[2]['age'] . "<br/>" . " Status: " . ($dogs[2]['is_alive'] ? 'Living' : 'Deceased');
    $hugo = "Name: " . $dogs[3]['name'] . "<br/>" . " Breed: " . $dogs[3]['breed'] . "<br/>" . " Age: " . $dogs[3]['age'] . "<br/>" . " Status: " . ($dogs[3]['is_alive'] ? 'Living' : 'Deceased');


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="7"> <!-- Auto refreshes every 7 secs -->
    <link rel="stylesheet" href="style.css">
    <title>Dogs</title>
</head>
<body>

    <h3 hidden><?php 
        echo "print_r<br/><br/>";
        print_r($dogs); 
        echo "<p>var_dump Associative Array<p/>";
        var_dump($dogs);        
        echo "<br/><p>As JSON</p>";
        echo "$dog_json";

        ?>
        
    </h3> <!-- nesting array data into a h3 and setting to hidden -->

        <?php
        echo "<h1>Dogs</h1>";
        echo "<p>$sherbet</p>"; //Sherbet
        echo "<p>$yoki</p>"; //Yoki
        echo "<p>$zeus</p>"; //Zeus
        echo "<p>$hugo</p>"; //Hugo

        ?>
    
</body>
</html>