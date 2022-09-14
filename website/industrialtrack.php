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
                        The 30th edition of the International Conference on Software Analysis, Evolution, and Reengineering (SANER’23) will feature an Industry track. The aim of this track is to bring together practitioners and researchers for an exchange of ideas, problems, and results. It provides a platform for people in industry and academia to interact with one another. The papers in the Industry track follow the general topics specified in the SANER 2023 research track.
                    </p>
                    <p style="text-align: justify;">
                        A good industry paper can present industrial practice and experience reports describing problems (and their solutions) encountered in real applications, describe the challenges involved in the knowledge transfer from academia to industry and vice-versa for real projects, and discuss a challenging problem currently occurring in industry, for which practitioners want feedback and-or inputs from the academic community. ICSE SEIP (International Conference on Software Engineering, Software Engineering in Practice) track will be a good reference to get an understanding of the expectations.
                    </p>
                    <p style="text-align: justify;">
                        Upon notification of acceptance, all authors of accepted papers will be asked to complete an IEEE Copyright form and will receive further instructions for preparing their camera ready versions. At least one author of each paper is expected to present the results at the SANER 2023 conference. All accepted contributions will be published in the conference electronic proceedings.
                    </p>
                    <br>
                    <strong>Evaluation Criteria</strong>
                    <p style="text-align: justify; margin-top: 15px;">
                        Submissions will be reviewed by at least two members of the Program Committee of the Industry Track, and they will be evaluated on the basis of industry relevance, originality, soundness, empirical and-or practical validation, quality and consistency of presentation.
                    </p>
                    <p style="text-align: justify; margin-top: 15px;">
                        <strong>Important note:</strong> SANER 2023 follows a full double-blind review process.​ Submissions that do not adhere to these limits or that violate the formatting guidelines will be desk-rejected without review.
                    </p>
                    <br>
                    <strong>Submission Instructions</strong>
                    <p style="text-align: justify; margin-top: 15px;">
                        Submissions should be at most 5 pages (including all text, references, appendices, and figures) and conform to the <a href="http://www.ieee.org/conferences_events/conferences/publishing/templates.html" target="_blank">IEEE proceedings style</a> (i.e., the same used from the main SANER conference). All submissions have to be written exclusively in English. Submissions must not have been previously published or concurrently submitted elsewhere.
                    </p>
                    Papers must be submitted in PDF format electronically through Easy Chair.
                    <p style="text-align: justify;">
                        <br>
                        <strong>Important Dates</strong>
                    <ul>
                        <li>Abstract Submission deadline: November 13, 2022 AoE</li>
                        <li>Paper Submission deadline: November 20, 2022 AoE</li>
                        <li>Notification: December 20, 2022 AoE</li>
                        <li>Camera Ready: January 13, 2023 AoE</li>
                        <li>Submission Page: <a target="_blank" href="https://easychair.org/conferences/?conf=saner2023">https://easychair.org/conferences/?conf=saner2023</a></li>
                    </ul>
                    </p>
                </div>
            </div>
        </div><!-- end of row -->
    </section>
    <!--
    <section id="what-we-do">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Committee Members</h3>
                    <hr class="lineHr">
                </div>
            </div>
            <?php
            $content = file_get_contents('config/production.json');
            $json = json_decode($content, true);
            ?>
            <div class="row"> <?php
                                foreach ($json['commiteeMembers']['industry_track'] as $key => $value) {
                                ?>
                    <div class="col-md-4">
                        <?php if (!is_null($value['website'])) { ?>
                            <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a><?php if ($value['name'] == 'Dongmei Zhang' || $value['name'] == 'Neha Rungta') {
                                                                                                                            echo ' <span style="font-size: 18px;">(co-Chair)</span>';
                                                                                                                        } ?>
                        <?php } else { ?>
                            <a><?php echo $value['name'] ?></a>
                        <?php } ?>
                        <p style="margin: 0;"><?php echo $value['affiliation'] ?></p>
                        <p><?php echo $value['nation'] ?></p>
                    </div>
                <?php
                                }
                ?>
            </div>
        </div>
    </section>
-->

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