<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head></head>
    <Title>Array Asociativos</Title>
    <body>
        <?php
        $fruta = array(
            'naranja' => array(
                'propiedad' => 'jugosa',
                'color' => 'naranja',
                'sabor' => 'dulce'
            ),
            'limón' => array(
                'propiedad' => 'jugoso',
                'color' => 'amarillo',
                'sabor' => 'cítrico'
            )
        );
        echo $fruta['limón']['color'];
        ?>
    </body>
</html>