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

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Coming soon...</p>
                    <!--
                    <div class="top-description-text" style="text-align: left; margin-bottom: 0;">
                        <h3>Research Track</h3>
                        <hr class="lineHr">
                    </div>
                    <?php
                    $content = file_get_contents('config/production.json');
                    $json = json_decode($content, true);
                    ?>
                    <div class="row"> <?php
                                        foreach ($json['commiteeMembers']['researchTrack'] as $key => $value) {
                                        ?>
                            <div class="col-md-4">
                                <?php if (!is_null($value['website'])) { ?>
                                    <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a><?php if ($value['name'] == 'Massimiliano Di Penta' || $value['name'] == 'David C. Shepherd') {
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
-->
                    <!--
                    <div class="top-description-text" style="text-align: left; margin-bottom: 0;">
                        <h3>Early Research Achievement Track</h3>
                        <hr class="lineHr">
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
-->
                    <!--
                    <div class="top-description-text" style="text-align: left; margin-bottom: 0;">
                        <h3>Tool Demo Track</h3>
                        <hr class="lineHr">
                    </div>
                    <?php
                    $content = file_get_contents('config/production.json');
                    $json = json_decode($content, true);
                    ?>
                    <div class="row"> <?php
                                        foreach ($json['commiteeMembers']['tool_track'] as $key => $value) {
                                        ?>
                            <div class="col-md-4">
                                <?php if (!is_null($value['website'])) { ?>
                                    <a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a><?php if ($value['name'] == 'Mario Linares Vasquez' || $value['name'] == 'Luca Ponzanelli') {
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
-->
                    <!--
                    <div class="top-description-text" style="text-align: left; margin-bottom: 0;">
                        <h3>Industrial Track</h3>
                        <hr class="lineHr">
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
-->
                    <!--
                    <div class="top-description-text" style="text-align: left; margin-bottom: 0;">
                        <h3>Journal First Track</h3>
                        <hr class="lineHr">
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
-->
                    <!--
                    <div class="top-description-text" style="text-align: left; margin-bottom: 0;">
                        <h3>REproducibility Studies and NEgative Results Track</h3>
                        <hr class="lineHr">
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
-->
                </div>
            </div>
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
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>

    <script>
        //Animation Wow.js
        new WOW().init();
    </script>

</body>

</html>
