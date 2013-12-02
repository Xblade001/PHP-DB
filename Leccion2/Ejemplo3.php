<html>
    <head></head>
    <body>
        <?php
        $dia = date("d");
        if ($dia <= 10) {
            echo "sitio activado";
        } else {
            echo "sitio fuera de servicio";
        }
        ?>
    </body>
</html>

