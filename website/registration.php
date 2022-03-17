<!DOCTYPE html>
<?php
$registration_mail = "rocco.oliveto@unimol.it";

$open_reg = strtotime("1/1/2023 12:10 CET");
$early_reg = strtotime("3/1/2023 23:59 CET");

$registration_open = time() >= $open_reg;
$late_registration = time() >= $early_reg;

if ($registration_open) {
    if (!$late_registration) {
        $registration_link = "https://indico.unimol.it/event/1/registrations";
        $registration_all_events = "https://indico.unimol.it/event/1/registrations/1/";
        $registration_one_day = "https://indico.unimol.it/event/1/registrations/3/";
    } else {
        $registration_link = "https://indico.unimol.it/event/1/registrations";
        $registration_all_events = "https://indico.unimol.it/event/1/registrations/8/";
        $registration_one_day = "https://indico.unimol.it/event/1/registrations/9/";
    }
} else {
    $registration_link = "#";
    $registration_all_events = "#";
    $registration_one_day = "#";
}

?>
<html lang="en">

<head>
    <?php require_once('./utils/header.php'); ?>
    <style>
        table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0;
            border-width: 1px 0 0 1px;
            margin: 0 0 1.5em;
            width: 100%;
        }

        td {
            border-width: 0 1px 1px 0;
        }

        th,
        td {
            padding: 8px;
        }

        table,
        th,
        td {
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-top-width: 1px;
            border-right-width: 1px;
            border-bottom-width: 1px;
            border-left-width: 1px;
        }

        caption,
        th,
        td {
            text-align: left;
            padding: 5px;
        }
    </style>
</head>

<body>

    <?php
    require_once('./utils/headerTopBar.php');
    require_once('./utils/navbar.php');
    ?>

    <!-- Breadcrumbs -->
    <?php
    require_once('./utils/breadcrumb.php');
    ?>
    <!-- end Breadcrumbs -->

    <!-- portfolio section -->
    <br />
    <br />
    <br />
    <br />
    <br />
    <p class="text-center">Coming soon...</p>
    <br />
    <br />
    <br />
    <br />
    <br />

    <?php //require_once('./utils/registration.php') 
    ?>
    <!-- footer -->
    <?php require_once('./utils/footer.php') ?>
    <!-- end footer -->

    <!-- jQuery -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.fitvids.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/jquery.ui.totop.min.js"></script>
    <script src="js/jquery.countTo.js"></script>
    <script src="js/jquery.placeholder.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        //Animation Wow.js
        new WOW().init();
    </script>

</body>

</html>
