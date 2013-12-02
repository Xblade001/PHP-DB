<html>
    <head>
        <title>Incremento en PHP</title>
    </head>
    <body>
        <?php
        $x = 3;
        $valor = $x++ * 10;
        echo "el Valor es: $valor para el Postincremento";
        echo "<br>";
        echo "La X es: $x";
        echo "<br>";
        echo '-------------------------------------------------';
        echo "<br>";
        $x = 3;
        $valor = ++$x * 10;
        echo "el Valor es: $valor para el Preincremento";
        echo "<br>";
        echo "La X es: $x";
        ?>
    </body>
</html>
