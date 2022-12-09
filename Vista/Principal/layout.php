<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="Vista\Principal\CSS\layout.css" rel="stylesheet">
    <script src="Vista\Principal\JS\layout.js"></script>
    <link rel="shortcut icon" href="Helpers/Media/iconnegro.png">
    <meta http-equiv="Cache-control" content="no-cache">
    <title>R-A Community</title>
</head>

<body>
    <?php
    require_once 'header.php';
    ?>

    <section>
        <div id="cuerpo">
            <?php
            require_once 'enruta.php';
            ?>
        </div>
    </section>

    <?php
    require_once 'footer.php';
    ?>
</body>

</html>