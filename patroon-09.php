<?php

/* Patroon9 */

echo "<div id='border'>";
    for ($c = 9; $c > 0; $c--) {
        $circColor = 'blue';
        for ($i = 0; $i < 9; $i++) {
            if ($c == $i + 1 || $c + $i == 9) {
                echo "<div class='circle color-red'></div>"; 
                if ($i > $c) {
                    $circColor = 'green';
                } else{
                    $circColor= 'green';
                }
            } else {
                echo "<div class='circle color-{$circColor}'></div>"; 
            }
        }
        echo '<br>';
    }
echo "</div>";
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Patroon 9</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>
</html>