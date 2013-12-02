<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head>
        <title>Ejercicio9</title>
    </head>
    <body>
        <?php
        $numero = 15;
        $pares = 0;
        $impares = 0;
        while ($numero > 0) {
            if ($numero % 2 == 0) {
                echo "El $numero es un número PAR <br> ";
                $pares++;
            } else {
                echo "El $numero es un número IMPAR <br>";
                $impares++;
            }
            $numero--;
        }
        echo "En total he contado <strong>$pares números pares</strong> y <strong>$impares impares</strong>";
        ?>
    </body>
</html>