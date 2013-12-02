<html>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <head></head>
    <Title>Letas</Title>
    <Body>
        <?php
        for ($num = 1; $num <= 5; $num++) {
            echo $num;
            echo "<br>";
            if ($num == 3) {
                echo "Aquí salimos\n";
                break;
            }
        }
        ?>
    </Body>
</html>