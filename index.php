<?php include "libs/load.php"; ?>
<!doctype html>
<html lang="en">

<head>
    <title>KidsAR - The play book for kids</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Custom CSS  -->
    <link rel="stylesheet" href="/assets/css/index.css">
</head>

<body>
    <main>
        <?php loadTemplate("_nav");?>
        <?php loadTemplate("_hero");?>
        <?php loadTemplate("_welcome");?>
        <?php loadTemplate("_bestbook");?>
        <?php loadTemplate("_help");?>
        <?php loadTemplate("_bookcatalog");?>
        <?php loadTemplate("_offer");?>
        <?php loadTemplate("_feedback");?>
    </main>
    <!-- footer  -->
    <?php loadTemplate("_footer"); ?>
</body>

</html>