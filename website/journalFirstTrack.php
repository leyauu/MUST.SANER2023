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
                        Starting this year, SANER is partnering with several software engineering journals to incorporate
                        Journal First / Conference Second (J1C2) papers into the SANER program. Through this initiative,
                        authors of journal-first papers accepted in the participating journals will be invited to present
                        their work at SANER, allowing the authors to interact directly with the community and offering the
                        SANER attendees a richer set of presentations.
                    </p>
                    <p style="text-align: justify;">
                        <span>The participating journals that partner with SANER are:</span>
                    <ul>
                        <li><a target="_blank" href="http://www.springer.com/computer/swe/journal/10664">
                                Empirical Software Engineering</a> (EMSE)
                        </li>
                        <li><a href="https://www.sciencedirect.com/journal/journal-of-systems-and-software" target="_blank">
                                Journal of Systems and Software</a> (JSS)
                        </li>
                        <li><a href="https://www.sciencedirect.com/journal/information-and-software-technology" target="_blank">
                                Information and Software Technology</a> (IST)
                        </li>
                        <li><a href="https://onlinelibrary.wiley.com/journal/20477481" target="_blank">
                                Journal of Software: Evolution and Process</a> (JSEP)
                        </li>
                    </ul>
                    </p>
                    <br>
                    <strong>Scope</strong>
                    <p style="text-align: justify; margin-top: 15px;">
                        To be eligible to participate in the J1C2 program, a paper must:
                    <ul>
                        <li>Be accepted in one of the participating journals after June 1, 2016 and before the J1C2 submission deadline.</li>
                        <li>Be in scope of the conference, i.e., focus on work related to software analysis, evolution, and reengineering.</li>
                        <li>Report on new research results that are not an extension of a previous conference publication. That is, journal versions extending prior conference publications with additional empirical results, proofs, algorithms, or other such details are out of scope for the J1C2 track.</li>
                        <li>Not been presented at or under consideration for any journal-first program of another conference.</li>
                    </ul>
                    </p>
                    <br>
                    <strong>Evaluation Criteria</strong>
                    <p style="text-align: justify; margin-top: 15px;">
                        The J1C2 committee will check whether the submission is in scope for the J1C2 track. As the
                        manuscripts have been already reviewed and accepted by the journals, they will not be reviewed again
                        for technical correctness but rather be checked for the J1C2 criteria.
                    </p>
                    <br>
                    <strong>Submission Instructions</strong>
                    <p style="text-align: justify;">
                        <br>
                        <span>Authors of manuscripts that fulfill the above criteria are invited to submit a presentation proposal via EasyChair.</span>
                        <br>
                    <p>The proposal should consist of:</p>
                    <ul>
                        <li>the paper title;</li>
                        <li>names of all authors;</li>
                        <li>an extended abstract (1 page) <b>by using IEEE double-column format</b> ;</li>
                        <li>a short statement on how the work satisfies the J1C2 criteria;</li>
                        <li>a pointer to the original journal paper.</li>
                    </ul>
                    <span>Please list all authors of the original journal paper as authors of your submission in EasyChair.</span>
                    </p>
                    <br>
                    <strong>Presentation and Proceedings</strong>
                    <p style="text-align: justify; margin-top: 15px;">
                        At least one author of each accepted J1C2 submission must register and attend the conference to present the paper.
                    </p>
                    <p style="text-align: justify; margin-top: 15px;">
                        The accepted journal-first papers will be listed in the conference program. Each paper will also have a one-page entry in the SANER proceedings; that entry will be the abstract submitted by the authors. Full journal-first manuscripts are published through the journals and will not be part of the SANER proceedings.
                    </p>
                    <p style="text-align: justify;">
                        <br>
                        <strong>Important Dates</strong>
                    <ul>
                        <li>Submission: <span style="color:red">Dec. 12th, 2022 (Extended)</span></li>
                        <li>Notification: <span style="">Dec. 17th, 2022</span></li>
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
                    <h3>Selection Committee</h3>
                    <hr class="lineHr">
                </div>
            </div>
            <?php
            $content = file_get_contents('config/production.json');
            $json = json_decode($content, true);
            ?>
            <div class="row"> <?php
                                foreach ($json['commiteeMembers']['journalTrack'] as $key => $value) {
                                ?>
                    <div class="col-md-4">
                        <?php if (!is_null($value['website'])) { ?>
                            <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a><?php if ($value['name'] == 'Julia Rubin') {
                                                                                                                            echo ' <span style="font-size: 18px;">(Chair)</span>';
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
