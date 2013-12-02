<html>
    <head>
        <title>Operador Ternario</title>
    </head>
    <body>
        <?php
        $nombre = "Alberto";
        echo ($nombre == "Alberto") ? "Hola Alberto Gimenez" : "No te conozco";
        echo"<br>";
        echo '-----------------------------------------------------------';
        echo"<br>";
        $valor = rand(1, 10);
        echo "El valor random es $valor <br>";
        echo ($valor <= 5) ? "es menos a 5" : "es mayor a 5";
        ?>
    </body>
</html>
