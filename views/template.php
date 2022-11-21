<!DOCTYPE html>
<html>

<head>
    <title>Formula 1</title>
    <link rel="stylesheet" href="styles/main.css" />
    <link rel="icon" type="image/png" href="img/logo.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
    include "views/components/nav.php"
    ?>

    <main>
        <?php
        $controller = new Controller();
        $controller->pageLinks();
        ?>
    </main>

    <?php
    include "views/components/footer.php"
    ?>

    <script src="js/main.js"></script>
</body>

</html>