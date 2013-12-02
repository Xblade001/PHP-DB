<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head></head>
    <Title>Array Asociativos</Title>
    <body>
        <?php
        $marca = array(
            'software' => array(
                'buscador' => array('Google', 'Yahoo', 'Baidu', 'Bing'),
                'CMS' => array('Wordpress', 'Joomla', 'Blogger')
            ),
            'hardware' => array(
                'PC' => 'Mac',
                'celular' => array('Black Berry', 'Iphone')
            )
        );
        echo $marca['software']['buscador'][0];
        ?>
    </body>
</html>