<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Funcion calcular</title>
    </head>
    <body>
        <?php

        function calcular($a, $b, $op) {
            switch ($op) {
                case "suma":
                    $c = $a + $b;
                    $d = "$a + $b = $c";
                    return $d;
                    break;
                case "resta":
                    $c = $a - $b;
                    $d = "$a - $b = $c";
                    return $d;
                    break;
                case "multi":
                    $c = $a * $b;
                    $d = "$a x $b = $c";
                    return $d;
                    break;
                case "divi":
                    $c = $a / $b;
                    $d = "$a / $b = $c";
                    return $d;
                    break;
                default:
                    $d = "no has elegido ninguna operación.";
                    return $d;
            }
        }

        $n1 = $_POST['n1'];
        $n2 = $_POST['n2'];
        $n3 = $_POST['n3'];
        $n4 = $_POST['n4'];
        $op = $_POST['op'];
        if ($n1 != 0 and $n2 != 0 and $n3 != 0 and $n4 != 0) {
            echo "números: primero: $n1, segundo: $n2, tercero: $n3, cuarto: $n4 <br/>";
            $r1 = calcular($n1, $n2, $op);
            echo "Primero y segundo: $r1 <br/>";
            $r2 = calcular($n1, $n3, $op);
            echo "Primero y Tercero: $r2 <br/>";
            $r3 = calcular($n1, $n4, $op);
            echo "Primero y cuarto: $r3 <br/>";
            $r4 = calcular($n2, $n3, $op);
            echo "Segundo y tercero: $r4 <br/>";
            $r5 = calcular($n2, $n4, $op);
            echo "Segundo y cuarto: $r5 <br/>";
            $r6 = calcular($n3, $n4, $op);
            echo "Tercero y cuarto: $r6 <br/>";
        } else {
            echo "No me has dado dos números, o el valor de alguno de ellos es 0.";
        }
        ?>
    </body>
</html>
