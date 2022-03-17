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

    <!-- Breadcrumbs -->
    <?php
    require_once('./utils/breadcrumb.php');
    ?>
    <!-- end Breadcrumbs -->

    <!-- portfolio section -->
    <section class="content">
        <div class="container">
            <!--<h3>Social Events</h3>
                <hr class="lineHr">-->

            <div class="row">
                <h5>Tuesday March 20 - Welcome cocktail</h5>
                <hr class="lineHr" style="margin-bottom: 10px;">

                <div class="col-md-7 padd">
                    <div class="owl-carousel owl-item-1">
                        <div class="item">
                            <img src="img/social/unimol.jpg" alt="University of Molise" />
                            <div class="description">
                                <p class="layerCaption">University of Molise</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-5 padd">
                    <p style="text-align: justify;">A buffet light dinner will be served at the University of Molise (conference venue). The welcome cocktail is open to all workshop and conference attendees and it will start at 19:00.
                    </p>
                </div>

            </div>

        </div><!-- end row -->
        </div><!-- end container -->
    </section>
    <section class="content">
        <div class="container">
            <div class="row">
                <h5>Wednesday March 21 - Reception</h5>
                <hr class="lineHr" style="margin-bottom: 10px;">

                <div class="col-md-5 padd">
                    <p style="text-align: justify;">
                        The conference reception will be held on the evening of Wednesday March 21st, 20:30 at Blue Note, the main Music Club in Macau. Before the the reception, there will be a guided tour of the historical center of Macau.</br>
                        <a href="https://goo.gl/maps/SaKMsPRCHAS2" target="_blank">Map</a>
                    </p>
                </div>

                <div class="col-md-7 padd">
                    <div class="owl-carousel owl-item-1">
                        <?php for ($i = 1; $i <= 12; $i++) { ?>
                            <div class="item">
                                <img src="img/social/bluenote<?= $i ?>.jpeg" alt="Blue Note" />
                                <div class="description">
                                    <p class="layerCaption">Blue Note Music Club</p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="content">
        <div class="container">
            <div class="row">
                <h5>Thursday March 22 - Banquet</h5>
                <hr class="lineHr" style="margin-bottom: 10px;">

                <div class="col-md-7 padd">
                    <div class="owl-carousel owl-item-1">
                        <?php for ($i = 1; $i <= 4; $i++) { ?>
                            <div class="item">
                                <img src="img/social/piana<?= $i ?>.jpg" alt="Piana dei Mulini" />
                                <div class="description">
                                    <p class="layerCaption">Piana dei Mulini</p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-md-5 padd">
                    <p style="text-align: justify;">
                        The conference banquet will be held on the evening of Thursday March 22nd, 19:00 at "Piana dei Mulini", an ancient residence which dates back to the end of XVIII century. Departure will be at 18:30 from the conference venue by bus (~20 minutes).<br />
                        <a href="http://www.lapianadeimulini.it/?lang=en" target="_blank">Website</a></br>
                        <a href="https://goo.gl/maps/QfttxekVxFU2" target="_blank">Map</a>
                    </p>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
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
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        //Animation Wow.js
        new WOW().init();
    </script>

</body>

</html>
