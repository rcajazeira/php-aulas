<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Tabuada de 1 a 10 usando loop
    for ($i = 1; $i <= 10; $i++) {
        echo "<h2>Tabuada do $i</h2>";
        for ($j = 1; $j <= 10; $j++) {
            echo "$i x $j = " . ($i * $j) . "<br>";
        }
        echo "<hr>";
    }   
    
     
  

    
    ?>
</body>
</html>