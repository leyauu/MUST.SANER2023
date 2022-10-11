<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once './utils/header.php'; ?>
    <style>
        .avatar {
            width: 130px;
            height: 130px;
            object-fit: cover;
            border-radius: 100%;
            margin: 15px 0;
        }

        .my-col {
            height: 28rem;
        }

        p {
            line-height: 20px;
        }
    </style>
</head>

<body>

    <?php
    require_once './utils/headerTopBar.php';
    require_once './utils/navbar.php';
    ?>

    <!-- Breadcrumbs -->
    <?php require_once './utils/breadcrumb.php'; ?>
    <!-- end Breadcrumbs -->

    <?php
    $content = file_get_contents('config/commiteeMembers.json');
    $json = json_decode($content, true);
    ?>

    <section class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="top-description-text" style="text-align: left; margin-bottom: 0;">
                        <h3>Research Track</h3>
                        <hr class="lineHr">
                    </div>
                    <div class="row text-center">
                        <?php foreach ($json['Research Track'] as $key => $value) { ?>
                            <div class="col-md-3 my-col">
                                <p><img class="avatar" src="/img/commitee/<?php echo $value['name']; ?>.jpg" alt="" onerror="javascript:this.src='<?php echo $value['img'] ?>';this.onerror=null;"></p>
                                <p>
                                    <?php if ($value['website'] != '') { ?>
                                        <a href="<?php echo $value['website']; ?>" target="_blank">
                                            <?php echo $value['name']; ?></a>
                                        <?php
                                        if (
                                            $value['name'] == 'Massimiliano Di Penta' ||
                                            $value['name'] == 'David C. Shepherd'
                                        ) {
                                            echo ' <span style="font-size: 18px;">(co-Chair)</span>';
                                        } ?>
                                    <?php } else {
                                    ?>
                                        <a><?php echo $value['name']; ?></a>
                                    <?php } ?>
                                </p>
                                <p><?php echo $value['affiliation']; ?></p>
                                <p><?php echo $value['nation']; ?></p>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="top-description-text" style="text-align: left; margin-bottom: 0;">
                        <h3>Early Research Achievement Track</h3>
                        <hr class="lineHr">
                    </div>
                    <div class="row text-center">
                        <?php foreach ($json['ERA Track'] as $key => $value) { ?>
                            <div class="col-md-3 my-col">
                                <p><img class="avatar" src="/img/commitee/<?php echo $value['name']; ?>.jpg" alt="" onerror="javascript:this.src='<?php echo $value['img'] ?>';this.onerror=null;"></p>
                                <p>
                                    <?php if ($value['website'] != '') { ?>
                                        <a href="<?php echo $value['website']; ?>" target="_blank">
                                            <?php echo $value['name']; ?></a>
                                        <?php
                                        if (
                                            $value['name'] == 'Massimiliano Di Penta' ||
                                            $value['name'] == 'David C. Shepherd'
                                        ) {
                                            echo ' <span style="font-size: 18px;">(co-Chair)</span>';
                                        } ?>
                                    <?php } else {
                                    ?>
                                        <a><?php echo $value['name']; ?></a>
                                    <?php } ?>
                                </p>
                                <p><?php echo $value['affiliation']; ?></p>
                                <p><?php echo $value['nation']; ?></p>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="top-description-text" style="text-align: left; margin-bottom: 0;">
                        <h3>Tool Demo Track</h3>
                        <hr class="lineHr">
                    </div>
                    <div class="row text-center">
                        <?php foreach ($json['Tool Demo Track'] as $key => $value) { ?>
                            <div class="col-md-3 my-col">
                                <p><img class="avatar" src="/img/commitee/<?php echo $value['name']; ?>.jpg" alt="" onerror="javascript:this.src='<?php echo $value['img'] ?>';this.onerror=null;"></p>
                                <p>
                                    <?php if ($value['website'] != '') { ?>
                                        <a href="<?php echo $value['website']; ?>" target="_blank">
                                            <?php echo $value['name']; ?></a>
                                        <?php
                                        if (
                                            $value['name'] == 'Massimiliano Di Penta' ||
                                            $value['name'] == 'David C. Shepherd'
                                        ) {
                                            echo ' <span style="font-size: 18px;">(co-Chair)</span>';
                                        } ?>
                                    <?php } else {
                                    ?>
                                        <a><?php echo $value['name']; ?></a>
                                    <?php } ?>
                                </p>
                                <p><?php echo $value['affiliation']; ?></p>
                                <p><?php echo $value['nation']; ?></p>
                            </div>
                        <?php } ?>
                    </div>

                    <div class="top-description-text" style="text-align: left; margin-bottom: 0;">
                        <h3>REproducibility Studies and NEgative Results Track</h3>
                        <hr class="lineHr">
                    </div>
                    <div class="row text-center">
                        <?php foreach ($json['RENE Track'] as $key => $value) { ?>
                            <div class="col-md-3 my-col">
                                <p><img class="avatar" src="/img/commitee/<?php echo $value['name']; ?>.jpg" alt="" onerror="javascript:this.src='<?php echo $value['img'] ?>';this.onerror=null;"></p>
                                <p>
                                    <?php if ($value['website'] != '') { ?>
                                        <a href="<?php echo $value['website']; ?>" target="_blank">
                                            <?php echo $value['name']; ?></a>
                                        <?php
                                        if (
                                            $value['name'] == 'Massimiliano Di Penta' ||
                                            $value['name'] == 'David C. Shepherd'
                                        ) {
                                            echo ' <span style="font-size: 18px;">(co-Chair)</span>';
                                        } ?>
                                    <?php } else {
                                    ?>
                                        <a><?php echo $value['name']; ?></a>
                                    <?php } ?>
                                </p>
                                <p><?php echo $value['affiliation']; ?></p>
                                <p><?php echo $value['nation']; ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer -->
    <?php require_once './utils/footer.php'; ?>
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