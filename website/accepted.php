<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('./utils/header.php'); ?>

    <style>
        .paper {
            margin-top: 24px;
        }

        .paper .authors {
            font-style: italic;
        }

        .paper .title {
            font-weight: bolder;
            display: block;
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

    <!-- acceptedPapers -->
    <section id="acceptedPapers" class="content">
        <div class="container">
            <div class="row padd">
                <div class="col-md-12">
                    <h3>Research Track</h3>
                    <hr class="lineHr">
                    <p>Coming soon...</p>
                    <?php
                    //require_once("./program_files/research_track.php");
                    ?>
                </div>
            </div>
        </div><!-- end of row -->
    </section>
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
    <script src="js/greensock.js"></script>
    <script src="js/layerslider.transitions.js"></script>
    <script src="js/layerslider.kreaturamedia.jquery.js"></script>
    <script src="js/importantDates.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        /* DOPO APERTURA DEL MODAL */
        $("#bioBosh, #abstractBosh").on('shown.bs.modal', function(e) {
            $('li.zm-active').removeClass('zm-active')
        });
        /* DOPO LA CHIUSURA DEL MODAL */
        $("#bioBosh, #abstractBosh").on('hidden.bs.modal', function(e) {
            $('#key').addClass('zm-active')
        });
    </script>

    <script>
        //Animation Wow.js
        new WOW().init();
    </script>

</body>

</html>
