<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Ejercicio5</title>
    </head>
    <body>
        <?php
        $valor = rand(1, 100);
        //$valor = 100;
        echo "El valor sorteado es $valor<br>";
        if ($valor <= 9) {
            echo "Tiene un dígito";
        } else {
            if ($valor < 100) {
                echo "Tiene 2 dígitos";
            } else {
                echo "Tiene 3 dígitos";
            }
        }
        ?>
    </body>
</html>
