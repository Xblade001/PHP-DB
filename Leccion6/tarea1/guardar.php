<html>
    <head>
        <title>Cliente</title>
    </head>
    <body>
        <?php
        $cliente = fopen("clientes.txt", "a") or
                die("Problemas en la creacion");
        fputs($cliente, $_REQUEST['nombre']);
        fputs($cliente, "\n");
        fputs($cliente, $_REQUEST['apellido']);
        fputs($cliente, "\n");
        fputs($cliente, $_REQUEST['ci']);
        fputs($cliente, "\n");
        fputs($cliente, $_REQUEST['fecha']);
        fputs($cliente, "\n");
        fputs($cliente, $_REQUEST['direccion']);
        fputs($cliente, "\n");
        fputs($cliente, $_REQUEST['email']);
        fputs($cliente, "\n");
        fputs($cliente, $_REQUEST['comentarios']);
        fputs($cliente, "\n");
        fputs($cliente, "--------------------------------------------------------");
        fclose($cliente);
        echo "Los datos se cargaron correctamente.";
        ?>
    </body>
</html>