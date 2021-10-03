<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('../temp/source.php'); ?>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>
        <?php if (isset($TPL->title)) {
            echo $TPL->title;
        } ?>
    </title>
    <?php if (isset($TPL->headcontent)) {
        include $TPL->headcontent;
    } ?>
    <!-- MDB icon -->
    <link rel="icon" href="../file/img/icn-removebg-preview.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <!-- MDB -->
    <!-- <link rel="stylesheet" href="../../bootstrap1/css/mdb.min.css"> -->
    <link rel="stylesheet" href="../bootstrap/css/mdb.min.css">
    <link rel="stylesheet" href="../css/ui.css">
    <link rel="stylesheet" href="../css/animation.css">
</head>

<body>
    <!-- Start your project here-->
    <div class="container-fluid" style="padding: 0; margin-bottom: 50px;">
        <?php
        include('../temp/header.php');
        if (isset($TPL->bodycontent)) {
            include $TPL->bodycontent;
        } ?>
    </div>
    <footer class="container-fluid fixed-bottom" style="background-color: #0F3460;">
        <h4 class="mt-2" align="center" style="font-family: 'Segoe UI';">
            &copy;
            <code class="my-1 p-2" style="color: white; background-color: #16213E; border-radius: 8px;">
                2021 Relaxing coding
            </code>
        </h4>
    </footer>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="../bootstrap/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
</body>

</html>