<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Uballers Test</title>
        <meta charset="utf-8"/>

        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php
            include_once "Controllers/MainController.php";

            $controller = new MainController();
            $controller->index();
        ?>
        
    </body>
</html>