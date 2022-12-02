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
            <h3 class="pull-left">REproducibility Studies and NEgative Results (RENE) Track</h3>
            <ul class="pull-right breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li class="active">RENE Track</li>
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
                        The 30th edition of the International Conference on Software Analysis, Evolution, and Reengineering (SANER’23) would like to encourage researchers to (1) reproduce results from previous papers and (2) publish studies with important and relevant negative or null results (results which fail to show an effect, yet demonstrate the research paths that did not pay off).
                    </p>
                    <p style="text-align: justify;">
                        We would also like to encourage the publication of the negative results or reproducible aspects of previously published work (in the spirit of journal-first submissions). This previously published work includes accepted submissions for the 2023 SANER main track.
                    </p>
                    <ol style="text-align: justify;">
                        <li>
                            Reproducibility studies. Inspired by ISSTA’23 Reproducibility studies, the papers in this category must go beyond simply re-implementing an algorithm and/or re-running the artifacts provided by the original paper. Such submissions should at least apply the approach on new data sets (open-source or proprietary). Particularly, reproducibility studies are encouraged to target techniques that previously were evaluated only on proprietary or open-source systems. A reproducibility study should clearly report on results that the authors were able to reproduce as well as on the aspects of the work that were irreproducible. We encourage reproducibility studies to follow the ACM guidelines on reproducibility (different team, different experimental setup): “The measurement can be obtained with stated precision by a different team, a different measuring system, in a different location on multiple trials. For computational experiments, this means that an independent group can obtain the same result using artifacts, which they develop completely independently.”
                        </li>
                        <li>
                            Negative results papers. We seek papers that report on negative results. We seek negative results for all types of software engineering research in any empirical area (qualitative, quantitative, case study, experiment, etc.). For example, did your controlled experiment on the value of dual monitors in pair programming not show an improvement over single monitors? Even if negative, results obtained are still valuable when they are either not obvious or disprove widely accepted wisdom. As Walter Tichy writes, “Negative results, if trustworthy, are extremely important for narrowing down the search space. They eliminate useless hypotheses and thus reorient and speed up the search for better approaches.”
                        </li>
                    </ol>
                    <br>
                    <strong>Evaluation Criteria</strong>
                    <p style="text-align: justify; margin-top: 15px;">
                        Both Reproducibility Studies and Negative Results submissions will be evaluated according to the following standards:
                    </p>
                    <p>
                    <ul>
                        <li>Depth and breadth of the empirical studies</li>
                        <li>Clarity of writing</li>
                        <li>Appropriateness of conclusions</li>
                        <li>Amount of useful, actionable insights</li>
                        <li>Availability of artifacts</li>
                        <li>Underlying methodological rigor. For example, a negative result due primarily to misaligned expectations or due to lack of statistical power (small samples) is not a good submission. The negative result should be a result of a lack of effect, not lack of methodological rigor. </li>
                    </ul>
                    </p>
                    <p style="text-align: justify;">
                        Most importantly, we expect reproducibility studies to clearly point out the artifacts the study is built upon, and to provide the links to all the artifacts in the submission (the only exception will be given to those papers that reproduce the results on proprietary datasets that can not be publicly released).
                    </p>
                    <br>
                    <p style="text-align: justify;">
                        <strong>Submission Instructions</strong>
                    <p style="text-align: justify;">
                        Submissions must be original, in the sense that the findings and writing have not been previously published or under consideration elsewhere. However, as either reproducibility studies or negative results, some overlap with previous work is expected. Please make that clear in the paper.
                    </p>
                    <p style="text-align: justify;">
                        Publication format should follow the SANER guidelines. Choose “RENE:Replication” or “RENE:NegativeResult” as the submission type.
                    </p>
                    <p style="text-align: justify;">
                        Length: There are two formats. Appendices to conference submissions or previous work by the authors can be described in 4 pages. New reproducibility studies and new descriptions of negative results will have a length of 10 pages.
                    </p>
                    </p>
                    <p style="text-align: justify;">
                        <br>
                        <strong>Important note: the RENE track of SANER 2023 DOES NOT FOLLOW a full double-blind review process.</strong>
                    </p>
                    <p style="text-align: justify;">
                        <br>
                        <strong>Important Dates</strong>
                    <ul>
                        <li>Abstract submission deadline: <span style="">November 11, 2022 AoE</span></li>
                        <li>Paper submission deadline: <span style="color:red">November 20, 2022 AoE (Extended)</span></li>
                        <li>Notifications: December 17 2022 AoE</li>
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
                                foreach ($json['commiteeMembers']['rene_track'] as $key => $value) {
                                ?>
                    <div class="col-md-4">
                        <?php if (!is_null($value['website'])) { ?>
                            <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a><?php if ($value['name'] == 'Denys Poshyvanyk' || $value['name'] == 'Neil Ernst') {
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
