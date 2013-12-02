<html>
    <head>
        <title>Ejemplo2 Leer Archivo</title>
        <meta http-equiv="Content-Type" content="text/html;
              charset=UTF-8">
    </head>
    <body>
        <?php
        $cliente = fopen("datos.txt", "r") or
                die("No se pudo abrir el archivo");
        while (!feof($cliente)) {
            $linea = fgets($cliente);
            $lineasalto = nl2br($linea);
            echo $lineasalto;
        }
        fclose($cliente);
        ?>
    </body>
</html>
