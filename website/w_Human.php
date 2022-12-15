<!DOCTYPE html>
<html lang="en">
<head>
    <title>SANER 2023 - Macau, China</title>
    <meta charset="utf-8">
    <meta name="description" content="SANER 2023 - Macau, China">
    <meta name="author" content="Angelo Parziale"/>
    <meta name="keywords" content="saner, html5, css3, Macau, China, molise"/>
    <!-- Bootstrap -->
    <meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!-- Icons/FontAwesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <!-- totop -->
    <link rel="stylesheet" href="css/ui.totop.css"/>
    <!-- owl carusol -->
    <link rel="stylesheet" href="css/owl.carousel.css"/>
    <!-- zetta menu -->
    <link rel="stylesheet" href="css/zetta-menu.min.css"/>
    <!-- Animation -->
    <link rel="stylesheet" href="css/animate.css"/>
    <!-- Customizable CSS -->
    <link rel="stylesheet" href="css/style.css"/>

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon/favicon-96x96.png">

    <!-- HTML5 elements and media queries Support for IE8 : HTML5 shim and Respond.js -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php
require_once ('./utils/headerTopBar.php');
require_once ('./utils/navbar.php');
?>

<!-- Breadcrumbs -->
<?php
require_once ('./utils/breadcrumb.php');
?>
<!-- end Breadcrumbs -->

<section class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="top-description-text" style="text-align: left; margin: 30px 0 0 0;">
                    <h3>2nd Workshop on Advances in Human-Centric Experiments in Software Engineering</h3>
                    <p><b>Home page:</b><span>&nbsp;<a target="_blank" href="https://human-conf.github.io/human23/">https://human-conf.github.io/human23/</a></span></p>
                    <hr class="lineHr">
                </div><!-- end top-description-text -->
                <p style="text-align: justify;">
                    Software is developed by humans and for humans - but often without properly considering humans. A
                    large part of empirical studies in software engineering is based on human-centric experiments - the
                    empirical evaluation of tools, processes, or models that involve human participants (e.g., the
                    usability evaluation of development environments and other tools). Those studies are designed to the
                    best of the researchers’ knowledge; yet because their primary field is usually computer science
                    rather than humanities, these experiments are often suboptimal from a methodological perspective -
                    they are conducted ad hoc with students or the researchers themselves. In contrast, human studies
                    techniques are well established in psychology, social sciences, or other fields of humanities.
                    The 2nd Workshop on Advances in Human-Centric Experiments in Software Engineering (HUMAN 2023) aims
                    to bring together researchers interested in how the discipline of software engineering can benefit
                    from human participation through human-centric experiments. Therefore, the workshop strives to
                    actively involve researchers from fields other than computer science (e.g., psychology or social
                    sciences) who have in-depth methodological knowledge of applicable techniques for human-centered
                    experiments.
                </p>
                <br>
                <p>The contributions should be of direct interest to software engineering, especially for the areas of analysis, development, and (re)engineering. In particular:</p>
                <ul>
                    <li>Empirical evaluations of software tools, methods, and (re)engineering.</li>
                    <li>Human aspects in software development, analysis, and evolution, including collaborative software (re)engineering practices.</li>
                    <li>Research methods for conducting experiments in software development that focus on humans.</li>
                    <li>Objective measurement and assessment for human aspects in software development practices.</li>
                    <li>Qualitative analysis in software analysis, development, and (re)engineering.</li>
                    <li>Social aspects of software engineering practice, including gender, equity, and diversity.</li>
                    <li>Additional topics involving both software engineering and human aspects are also welcome.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="what-we-do">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--<h3>Organizers</h3>-->
                <!--<hr class="lineHr">-->
                <p style="text-align: justify;">
                    <strong>Important Dates</strong>
                    <ul>
                        <li>Submission: <span style="color:red">December 18, 2022 AoE (Extended)</span></li>
                        <li>Notifications: 06 January 2023 AOE</li>
                        <li>Camera Ready: 13 January 2023 AOE</li>
                        <li>Submission Page: <a target="_blank" href="https://easychair.org/account/signin_timeout?l=t6JJuJHKle53WehtUXDlD4">https://easychair.org/account/signin_timeout?l=t6JJuJHKle53WehtUXDlD4</a></li>
                    </ul>
            </div>
        </div>
        <!-- <?php
        $content = file_get_contents('config/production.json');
        $json = json_decode($content, true);
        ?>
        <div class="row"> <?php
            foreach ($json['workshops']['softwareClones'] as $key => $value) {
                ?>
                <div class="col-md-4">
                    <p style="margin: 0;"><?php echo $value['name'] ?></p>
                    <p style="margin: 0;"><?php echo $value['affiliation'] ?></p>
                    <p><?php echo $value['nation'] ?></p>
                </div>
                <?php
            }
            ?> -->
        </div>
    </div>
</section>

</body>

</html>
