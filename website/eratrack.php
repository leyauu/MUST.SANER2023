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
    <div class="breadcrumbs section-parallax parallaxBg" style="background-image: url(img/venue/university/universita1.png);">
        <div class="layer"></div>
        <div class="container parallax-content">
            <h3 class="pull-left">Early Research Achievement Track</h3>
            <ul class="pull-right breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">ERA Track</li>
            </ul>
        </div>
    </div>
    <!-- end Breadcrumbs -->

    <!-- what-we-do -->
    <section id="what-we-do" class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p style="text-align: justify;">
                        The 30th edition of the International Conference on Software Analysis, Evolution, and Reengineering (SANER’23) will feature an Early Research Achievements (ERA) track.
                    </p>
                    <p style="text-align: justify;">
                        The goal of the ERA track is to provide researchers and practitioners with a forum for presenting promising ideas in early stages of research. These ideas do not require a strong empirical evaluation. The 2023 ERA track aims to provide constructive feedback to guide authors from their initial ideas and limited evaluations toward solid SANER 2024 papers with strong empirical underpinnings. The ERA track is specifically looking for fresh, innovative, provocative ideas. We aim to create an open atmosphere where discussion and feedback stands central.
                    </p>
                    <p style="text-align: justify;">
                        The topics of interest for the ERA track are the same as the main research track and concern all the topics in the research and practice of software analysis, evolution, and reengineering.
                    </p>
                    <br>
                    <strong>Evaluation Criteria</strong>
                    <p style="text-align: justify; margin-top: 15px;">
                        Submissions will be evaluated on the basis of their originality, potential impact, technical soundness, evaluation, quality of presentation, and appropriate comparison to related work. Emphasis will be put on the originality and timeliness of the proposed contribution; a full evaluation of the proposed ideas is not required.
                    </p>
                    <br>
                    <p style="text-align: justify;">
                        <strong>Submission Instructions</strong>
                    <ul>
                        <li>Papers must not exceed five pages (including all text, figures, references, and appendices)</li>
                        <li>Papers must conform to the IEEE proceedings paper format guidelines</li>
                        <li>Papers must be submitted electronically in PDF format via the SANER 2023 EasyChair submission site</li>
                    </ul>
                    </p>
                    <p style="text-align: justify; margin-top: 15px;">
                        <strong>Important note: SANER 2023 follows a full double-blind review process.​</strong> Submissions that do not adhere to these limits or that violate the formatting guidelines will be desk-rejected without review.
                    </p>
                    <p style="text-align: justify;">
                        Papers submitted to the ERA must not have been previously accepted for publication or submitted for review to another publication venue.
                    </p>
                    <p style="text-align: justify;">
                        <br>
                        <strong>Important Dates</strong>
                    <ul>
                        <li style="list-style: none;">Abstract submission: <span class="expired">November 11, 2022 AoE</span></li>
                        <li style="list-style: none;">Paper submission: <span class="expired">November 18, 2022 AoE</span></li>
                        <li style="list-style: none;">Notifications: <span class="expired">December 17, 2022 AoE</span></li>
                        <li style="list-style: none;">Camera Ready: <span class="expired">January. 13, 2023 AoE</span></li>
                        <a target="_blank" href="https://easychair.org/conferences/?conf=saner2023" style="color: blue">https://easychair.org/conferences/?conf=saner2023</a>
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
                                foreach ($json['commiteeMembers']['era_track'] as $key => $value) {
                                ?>
                    <div class="col-md-4">
                        <?php if (!is_null($value['website'])) { ?>
                            <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a><?php if ($value['name'] == 'Jens Krinke' || $value['name'] == 'Shane McIntosh') {
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
