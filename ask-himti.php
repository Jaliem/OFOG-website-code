<?php
include('components/material-items.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $USE_BOOTSTRAP = true;
    $TITLE = 'Ask Us';
    require('components/head.php');
    ?>
    <link rel="stylesheet" href="assets/css/contact.css">
</head>

<body>

    <?php
    require_once('components/navbar.php'); ?>

    <div id="content-container">
        <div id="content-section">
            <div id="content-left d-flex">
                <?php
                if ($links != NULL && count($links) > 0) {
                    foreach ($links as $link) {
                        echo '
                        <p
                        id="', $link["id"],'"
                        onclick=","
                        class=","
                        >',
                        $link["name"],'
                        </p>';
                    }
                }
                ?>
            </div>
            <div id="content-center"></div>
            <div id="content-right">

            </div>
        </div>
    </div>

    <?php require_once('components/footer.php') ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>