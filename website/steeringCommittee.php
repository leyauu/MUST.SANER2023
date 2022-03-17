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
                    <div class="top-description-text" style="text-align: left;">
                        <hr>
                    </div><!-- end top-description-text -->
                    <table class="table" style="width: 100%; margin-top: -4em;">
                        <tbody style="text-align: left;">
                            <tr>
                                <td style="border: none; text-align: left;">
                                    <div class="container">
                                        <?php
                                        $content = file_get_contents('config/production.json');
                                        $json = json_decode($content, true);
                                        ?>
                                        <div class="row">
                                            <?php
                                            foreach ($json['steeringCommittee']['parte_uno'] as $key => $value) {
                                            ?>
                                                <div class="col-md-3">
                                                    <img class="img-circle" src="<?php echo $value['img'] ?>" alt="<?php echo $value['name'] ?>" />
                                                    <div class="team-date">
                                                        <br />
                                                        <h6>
                                                            <a href="<?php echo $value['website'] ?>" target="_blank">
                                                                <?php echo $value['name'] ?>
                                                            </a>
                                                        </h6>
                                                        <p><?php echo $value['affiliation'] ?></p>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="top-description-text" style="text-align: left;">
                        <hr>
                    </div>
                    <table class="table" style="width: 100%; margin-top: -4em;">
                        <tbody>
                            <tr>
                                <td style="border: none; text-align: left;">
                                    <div class="container">
                                        <?php
                                        $content = file_get_contents('config/production.json');
                                        $json = json_decode($content, true);
                                        ?>
                                        <div class="row"> <?php
                                                            foreach ($json['steeringCommittee']['parte_due'] as $key => $value) {
                                                            ?>
                                                <div class="col-md-3">
                                                    <img class="img-circle" src="<?php echo $value['img'] ?>" alt="<?php echo $value['name'] ?>" />
                                                    <div class="team-date">
                                                        <br />
                                                        <h6><a href="<?php echo $value['website'] ?>" target="_blank"><?php echo $value['name'] ?></a><?php if ($value['name'] == 'Serge Demeyer') echo " (Chair)";
                                                                                                                                                        else "" ?> </h6>
                                                        <p><?php echo $value['affiliation'] ?></p>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
