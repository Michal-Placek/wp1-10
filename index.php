<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //  basic variable unit; max count of repeat;
    for ($i=0; $i <= 100; $i=$i+2) { 
        echo $i . "<br>";
    }
    //  čísla od 0 do 20 včetně a vedle nich mocniny;
    for ($i=0; $i <=20 ; $i++) { 
        echo $i;
        echo ",";
        echo $i * $i;
        echo "<br>";
    }
    //  odpočet;
    for ($i=10; $i >=1 ; $i--) { 
        echo $i;
        echo "<br>";
    }
        echo "Raketa letí!";
    // vygeneruj X-náhodných čísel
    for ($i=1; $i <=10 ; $i++) { 
        echo rand(0, 100) . ",";
    }

    ?>
</body>
</html>