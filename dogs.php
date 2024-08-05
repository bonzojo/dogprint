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

    //Adding to array
    $dogs[0]['favourite_thing'] = 'Chasing Pigeons';
    $dogs[1]['favourite_thing'] = 'Watching the World go by';
    $dogs[2]['favourite_thing'] = 'Belly Rubs';
    $dogs[3]['favourite_thing'] = 'Tennis Ball';


    //Parse Associate Array and store as a variable
    ob_start(); 
    foreach ($dogs as $dog) {
        echo "Name: " . $dog['name'] . "<br>";
        echo "Breed: " . $dog['breed'] . "<br>";
        echo "Age: " . $dog['age'] . "<br>";
        echo "Is Alive: " . ($dog['is_alive'] ? 'Yes' : 'No') . "<br>";
        echo "Favourite Thing: " . $dog['favourite_thing'] . "<br><br>";
    }
    $dog_info = ob_get_clean();
    
    //As array - print_r
    $dogs_array= print_r($dogs, true);

    //var_dump array
    ob_start();
    var_dump($dogs);
    $dog_dump = ob_get_clean();

    //Parse to Json
    $dog_json = json_encode($dogs);
    
    //Seperate into Variables
    $sherbet = "Name: " . $dogs[0]['name'] 
    . "<br/>" . " Breed: " . $dogs[0]['breed'] 
    . "<br/>" . " Age: " . $dogs[0]['age'] 
    . "<br/>" . " Status: " . ($dogs[0]['is_alive'] ? 'Living' : 'Deceased') 
    . "<br/>" . " Favourite Thing: " . $dogs[0]['favourite_thing'] . "<br/>";

    $yoki = "Name: " . $dogs[1]['name'] 
    . "<br/>" . " Breed: " . $dogs[1]['breed'] 
    . "<br/>" . " Age: " . $dogs[1]['age'] 
    . "<br/>" . " Status: " . ($dogs[1]['is_alive'] ? 'Living' : 'Deceased')
    . "<br/>" . " Favourite Thing: " . $dogs[1]['favourite_thing'] . "<br/>";

    $zeus = "Name: " . $dogs[2]['name'] 
    . "<br/>" . " Breed: " . $dogs[2]['breed'] 
    . "<br/>" . " Age: " . $dogs[2]['age'] . "<br/>" 
    . " Status: " . ($dogs[2]['is_alive'] ? 'Living' : 'Deceased')
    . "<br/>" . " Favourite Thing: " . $dogs[2]['favourite_thing'] . "<br/>";

    $hugo = "Name: " . $dogs[3]['name'] 
    . "<br/>" . " Breed: " . $dogs[3]['breed'] 
    . "<br/>" . " Age: " . $dogs[3]['age'] 
    . "<br/>" . " Status: " . ($dogs[3]['is_alive'] ? 'Living' : 'Deceased')
    . "<br/>" . " Favourite Thing: " . $dogs[3]['favourite_thing'] . "<br/>";

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
        <main>
            <h1>Dogs</h1>
            
            <em>as associative array</em>
            <p><?=$dogs_array ?></p>
            <hr>

            <em>as parsed JSON</em>
            <p><?=$dog_json ?></p>
            <hr>

            <em>as var_dump</em>
            <p><?=$dog_dump ?></p>
            <hr>

            <em>parsed associative array</em>
            <p><?=$dog_info ?></p>
            <hr>

            <em>as individual variables </em><b>can be in any order</b>
            <p><?=$hugo ?></p>
            <p><?=$zeus ?></p>
            <p><?=$yoki ?></p>
            <p><?=$sherbet ?></p>
            <hr>

        </main>
    </body>
</html>