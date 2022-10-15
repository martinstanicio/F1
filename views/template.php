<!DOCTYPE html>
<html>

<head>
    <title>Formula 1</title>
    <link rel="stylesheet" href="./styles/main.css" />
    <link rel="icon" type="image/png" href="./img/logo.svg" />
</head>

<body>
    <?php
    include "views/components/nav.php"
    ?>

    <main>
        <?php
        $main = new McvController();
        $main->pageLinks();
        ?>
    </main>

    <?php
    include "views/components/footer.php"
    ?>
</body>

</html>