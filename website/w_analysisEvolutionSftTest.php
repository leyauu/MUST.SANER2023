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
                    <h3>6th Workshop on Validation, Analysis and Evolution of Software Tests</h3>
                    <p><b>Home page:</b><span>&nbsp;<a target="_blank" href="https://vstworkshop.github.io/vst2023/">https://vstworkshop.github.io/vst2023/</a></span></p>
                    <hr class="lineHr">
                </div><!-- end top-description-text -->

                <p style="text-align: justify;">
                    Software projects accumulate large sets of test cases, encoding valuable expert knowledge about 
                    the system under test. Over time, the reliability of the tests decreases, and they become difficult 
                    to understand and maintain. Extra effort is required for repairing broken tests and for adapting and 
                    co-evolving test suites with changing software systems.
                    The International Workshop on Validation, Analysis and Evolution of Software Tests (VST) is a unique 
                    event bringing together academics, industrial researchers, and practitioners for exchanging experiences, 
                    solutions, and new ideas in applying methods, techniques and tools from software analysis, evolution and 
                    re-engineering to advance the state of the art in test development and maintenance.
                </p>
                <br>
                <p>The workshop invites submission of full technical papers (8 pages) as well as position papers and tool demos (2-4 pages) related, but not limited, to:</p>
                <ul>
                    <li>Change analysis for software tests</li>
                    <li>Automated repair for test code</li>
                    <li>Test code analysis and validation</li>
                    <li>Test execution visualization</li>
                    <li>Clone detection for tests</li>
                    <li>Test minimization and simplification</li>
                    <li>Test results and bug report analysis</li>
                    <li>Fault localization</li>
                    <li>Test generation and amplification</li>
                    <li>Model-based testing</li>
                    <li>Combinations of the topics above</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section id="what-we-do">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
         <!--   <h3>Organizers</h3>
                <hr class="lineHr"> -->
                <p style="text-align: justify;">
                    <strong>Important Dates</strong>
                <ul>
                    <li>Abstract submission deadline: December 11, 2022 AoE</li>
                    <li>Paper submission deadline: December 18, 2022 AoE</li>
                    <li>Notifications: January 8, 2023</li>
                    <li>Camera Ready: January 15, 2023</li>
                    <li>Submission Page: <a target="_blank" href="https://easychair.org/conferences/?conf=vst2023 ">https://easychair.org/conferences/?conf=vst2023</a></li>
               </ul>
               <br>
               <p style="text-align: justify;">
                    For further information visit the workshop's official page: <a target="_blank" href="https://vstworkshop.github.io/vst2023/">https://vstworkshop.github.io/vst2023/</a>
               </p>
            </div>
        </div>
        <!--<?php
        $content = file_get_contents('config/production.json');
        $json = json_decode($content, true);
        ?>
        <div class="row"> <?php
            foreach ($json['workshops']['ValidationAnalysisSoftwareTest'] as $key => $value) {
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
