<html>
    <head>
        <title>Reporte de clientes</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <style type="text/css">
            h1 {color:blue; text-decoration:underline}
        </style>
    </head>
    <body>
        <h1>Reporte de clientes</h1>
        <?php

        function opcion($op) {
            switch ($op) {
                case 1:
                    echo "Nombre: ";
                    break;
                case 2:
                    echo "Apellido: ";
                    break;
                case 3:
                    echo "CI: ";
                    break;
                case 4:
                    echo "Fecha de nacimiento: ";
                    break;
                case 5:
                    echo "Direccion: ";
                    break;
                case 6:
                    echo "Email: ";
                    break;
                case 7:
                    echo "Comentarios: ";
                    break;
                case 8:
                    break;
            }
        }

        $cliente = fopen("clientes.txt", "r") or die("No se pudo abrir el archivo");
        $a = 1;
        while (!feof($cliente)) {
            $linea = fgets($cliente);
            $lineasalto = nl2br($linea);
            opcion($a);
            echo $lineasalto;
            echo "\n";
            $a++;
            if ($a == 9)
                $a = 1;
        }
        fclose($cliente);
        ?>
    </body>
</html>
