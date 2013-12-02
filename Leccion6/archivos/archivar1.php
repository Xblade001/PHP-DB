<html>
    <head>
        <title>Problema</title>
    </head>
    <body>
        <?php
        $cliente = fopen("datos.txt", "a") or
                die("Problemas en la creacion");
        fputs($cliente, $_REQUEST['nombre']);
        fputs($cliente, "\n");
        fputs($cliente, $_REQUEST['comentarios']);
        fputs($cliente, "\n");
        fputs($cliente, "--------------------------------------------------------");
        fputs($cliente, "\n");
        fclose($cliente);
        echo "Los datos se cargaron correctamente.";
        ?>
    </body>
</html>