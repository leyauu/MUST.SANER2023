<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('./utils/header.php'); ?>
</head>

<body>

    <?php
    require_once('./utils/headerTopBar.php');
    require_once('./utils/navbar.php');
    ?>

    <?php
    require_once('./utils/breadcrumb.php');
    ?>

    <section id="what-we-do" class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p style="text-align: justify;">
                        We are honoured to announce the eminent keynotes. Stay tuned for more details.
                    </p>
                </div>
            </div>
            <?php //require_once('./utils/keynotes.php') 
            ?>
        </div>
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

        function showWarning() {
            $('#panelWarning').css('display', 'block');
        }

        function hideWarning() {
            $('#panelWarning').css('display', 'none');
        }
    </script>

    <script>
        //Animation Wow.js
        new WOW().init();
    </script>

</body>

</html>
