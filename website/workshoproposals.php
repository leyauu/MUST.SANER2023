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

    <!-- what-we-do -->
    <section id="what-we-do" class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p style="text-align: justify;">
                        We solicit proposals for workshops to be held in conjunction with the main conference. Workshops can be full or half day and should highlight a specific topic of interest related to software analysis, evolution, and reengineering. We encourage workshop organizers to include activities that provide their participants with a true workshop experience.
                    </p>
                    <br>
                    <strong>Evaluation Criteria</strong>
                    <p style="text-align: justify; margin-top: 15px;">
                        Submissions will be evaluated by at least three program committee members. The evaluation will focus on the novelty, originality, importance to the field, proper use of research methods, and presentation of the submissions. We strongly encourage authors to make available all data and software they use in their work, in order to allow for verification and replication of their results.
                    </p>
                    <br>
                    <strong>Submission instructions</strong>
                    <p style="text-align: justify; margin-top: 15px;">
                        Workshop proposals should include the following information, with a maximum of two pages in IEEE proceedings format:
                    </p>
                    <ul>
                        <li>Workshop title</li>
                        <li>Main contact for the workshop</li>
                        <li>Workshop organizers and contact information</li>
                        <li>Brief description of workshop topic and goals</li>
                        <li>Expected numbers of submissions and participants</li>
                        <li>Expected number of accepted papers</li>
                        <li>Draft workshop schedule including duration (full day or half day), format of sessions and discussions</li>
                        <li>Paper selection criteria and mechanism (<strong>Important note:</strong> SANER 2023 follows a full double-blind review process.)</li>
                    </ul>
                    <p style="text-align: justify;">
                        Please send your proposal via email to Weiyi Shang <a href="mailto:shang@encs.concordia.ca">shang@encs.concordia.ca</a>
                    </p>
                    <!--
                    <p style="text-align: justify;">
                        <br>
                        <strong>Important Dates</strong>
                    <ul>
                        <li>Proposal submission deadline: <del>September 30, 2017 AoE</del>&nbsp;October 5, 2017 AoE</li>
                        <li>Notifications: October 9, 2017</li>
                    </ul>
                    </p>
-->
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
        jQuery("#layerslider").layerSlider({
            responsive: false,
            responsiveUnder: 1280,
            layersContainer: 1280,
            skin: 'noskin',
            hoverPrevNext: false,
            skinsPath: '../layerslider/skins/'
        });
    </script>

    <script>
        //Animation Wow.js
        new WOW().init();
    </script>

</body>

</html>
