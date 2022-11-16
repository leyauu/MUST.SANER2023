<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('./utils/header.php'); ?>
    <style>
        .expired {
            color: red;
            opacity: 0.5;
        }
    </style>
</head>

<body>

    <?php
    require_once('./utils/googleAnalysis2.php');
    require_once('./utils/headerTopBar.php');
    require_once('./utils/navbar.php');
    ?>

    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox" style="height:58vw;min-height:320px;max-height:560px;width:100vw;">
            <div class="item active" style="height:100%;">
                <img style="width:100%;height:100%;object-fit: cover;" src="sliderimages/banner1.png" alt="Ruínas da Antiga Catedral de São Paulo">
                <div class="carousel-caption" style="top:15%;left:15%;text-align:left;">
                    <h3 style="color:#21252b">SANER 2023</h3>
                    <p style="color:#21252b">30th IEEE International Conference on <br />Software Analysis, Evolution and Reengineering <br />Macao SAR, China, March 21st-24th, 2023.
                    </p>
                </div>
            </div>
            <div class="item" style="height:100%;">
                <img style="width:100%;height:100%;object-fit: cover;" src="sliderimages/banner2.png" alt="Grand Lisboa">
                <div class="carousel-caption" style="top:15%;right:15%;text-align:right;">
                    <h3 style="color:#fff">SANER 2023</h3>
                    <p style="color:#fff">SANER is the premier research conference on <br /> the theory and practice of recovering <br /> information from existing software and systems.</p>
                </div>
            </div>
            <div class="item" style="height:100%;">
                <img style="width:100%;height:100%;object-fit: cover;" src="sliderimages/banner3.png" alt="Macao Tower">
                <div class="carousel-caption" style="top: 0; bottom: 0; vertical-align: middle; display: table; margin: auto auto; left: 0; right: 0;">
                    <h3 style="color:#fff">SANER 2023</h3>
                    <p style="color:#fff">SANER promotes discussion and interaction <br /> among researchers and practitioners about the development of maintainable systems.</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- what-we-do -->
    <section id="what-we-do" class="content">
        <div class="row">
            <div class="col-lg-8">
                <h2>Welcome</h2>
                <hr class="lineHr">
                <!--
                <p>
                    <b>SANER 2023</b> is over. Thank you ALL for making this conference an exciting event and hope to see you at SANER 2024 in Hangzhou, China.
                </p>
-->
                <br>
                <p>
                    <b>SANER</b> is the premier event on the theory and practice of recovering information from existing software and systems. The event explores innovative methods to extract the many kinds of information that can be recovered from software, software engineering documents, and systems artifacts, and examines innovative ways of using this information in system renewal and program understanding.
                </p>
                <br>
                <p>
                    <b>SANER</b> promotes discussion and interaction among researchers and practitioners about the development of maintainable systems, and the improvement, evolution, migration, and reengineering of existing systems. The venue also explores innovative methods of extraction for the many kinds of information of interest to software developers and examines innovative ways of using this information in system renewal and program understanding.
                </p>
                <br>
                <p>
                    <b>SANER</b> will feature technical research paper sessions, workshops, an early research achievements track, an industry paper track, a tool demonstration track, and for the first time a dedicated track on negative results in software analysis, evolution and reengineering.
                </p>
                <br>
                <div class="well">
                    <p>
                        This 30th edition of the IEEE International Conference on Software Analysis, Evolution and Reengineering will be held at the Macau University of Science and Technology in Macao SAR, China, 2023.
                        <b>A special issue based on selection of best papers from SANER 2023 will be published in Springer’s Journal of <a target="_blank" href="http://www.springer.com/computer/swe/journal/10664">Empirical Software Engineering (EMSE).</a></b>
                    </p>
                </div>
                <br>
                <iframe style="width:100%;height:55vw;max-height:530px;" src="https://www.youtube.com/embed/A6jyJ9rbFmE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-lg-4 padd">
                <div class="panel panel-danger" style="border-radius: 4px;">
                    <div class="panel-heading" style="text-align: center;">
                        <h5 class="panel-title"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp;Latest News</h5>
                    </div>
                    <div class="panel panel-body" style="padding-bottom: 0;">
                        <strong>March 16, 2022:</strong> Our official website is launched: <a href="https://saner2023.must.edu.mo/">saner2023.must.edu.mo</a>
                        <br>
                        <strong>Apri 30, 2022:</strong> Research track deadline is confirmed
                        <br>
                    </div>
                </div>
                <div class="panel panel-primary" style="border-radius: 4px;">
                    <div class="panel-heading" style="text-align: center;">
                        <h5 class="panel-title"><i class="fa fa-calendar-check-o" aria-hidden="true"></i>&nbsp;Important dates</h5>
                    </div>
                    <div class="panel panel-body">
                        <div id="date1" style="display: block;">
                            <p style="width:100%; text-align: center;"><b>Research Track</b></p>
                            <p>
                                <li style="list-style: none;">Abstract submission: <span class="expired">October 14, 2022 AoE</span></li>
                                <li style="list-style: none;">Paper submission: <span class="expired">October 21, 2022 AoE</span></li>
                                <li style="list-style: none;">Notifications: <span class="expired">December 16, 2022 AoE</span></li>
                                <li style="list-style: none;">Camera Ready: <span class="expired">January 13, 2023 AoE</span></li>
                        </div>
                        <div id="date2" style="display: none;">
                            <p style="width:100%; text-align: center;"><b>ERA Track</b></p>
                            <p>
                                <li style="list-style: none;">Abstract submission: <span class="expired">November 13, 2022 (Extended)</span></li>
                                <li style="list-style: none;">Paper submission: <span class="expired">November 18, 2022 AoE</span></li>
                                <li style="list-style: none;">Notifications: <span class="expired">December 17, 2022 AoE</span></li>
                                <li style="list-style: none;">Camera Ready: <span class="expired">January. 13, 2023 AoE</span></li>
                            </p>
                        </div>
                        <div id="date3" style="display: none;">
                            <p style="width:100%; text-align: center;"><b>Tool Demo Track</b></p>
                            <p>
                                <li style="list-style: none;">Abstract submission: <span class="expired">November 11, 2022 AoE</span></li>
                                <li style="list-style: none;">Paper submission: <span class="expired">November 18, 2022 AoE</span></li>
                                <li style="list-style: none;">Notifications: <span class="expired">December 17, 2022 AoE</span></li>
                                <li style="list-style: none;">Camera Ready: <span class="expired">January 13, 2023 AoE</span></li>
                            </p>
                        </div>
                        <div id="date4" style="display: none;">
                            <p style="width:100%; text-align: center;"><b>Industrial Track</b></p>
                            <p>
                                <li style="list-style: none;">Abstract submission: <span class="expired">November 20, 2022 (Extended)</span></li>
                                <li style="list-style: none;">Paper submission: <span class="expired">November 27, 2022 (Extended)</span></li>
                                <li style="list-style: none;">Notifications: <span class="expired">December 20, 2022 AoE</span></li>
                                <li style="list-style: none;">Camera Ready: <span class="expired">January 13, 2023 AoE</span></li>
                            </p>
                        </div>
                        <div id="date5" style="display: none;">
                            <p style="width:100%; text-align: center;"><b>Workshop Proposals</b></p>
                            <p>
                                <li style="list-style: none;">Submission: <span class="expired">October 6, 2022</span></li>
                                <li style="list-style: none;">Notifications: <span class="expired">October 26, 2022</span></li>
                            </p>
                        </div>
                        <div id="date6" style="display: none;">
                            <p style="width:100%; text-align: center;"><b>RENE Track</b></p>
                            <p>
                                <li style="list-style: none;">Abstract submission: <span class="expired">November 18, 2022 (extended)</span></li>
                                <li style="list-style: none;">Paper submission: <span class="expired">November 20, 2022 (extended)</span></li>
                                <li style="list-style: none;">Notifications: <span class="expired">December 17, 2022 AoE</span></li>
                                <li style="list-style: none;">Camera Ready: <span class="expired">January 13, 2023 AoE</span></li>
                            </p>
                        </div>
                        <div id="date7" style="display: none;">
                            <p style="width:100%; text-align: center;"><b>Journal First Track AoE</b></p>
                            <li style="list-style: none;">Submission: <span class="expired">November 18th, 2022 AoE</span></li>
                            <li style="list-style: none;">Notification: <span class="expired">December 17th, 2022 AoE</span></li>
                        </div>
                        <ul class="pager" style="margin-top: 5px; margin-bottom: 0px;">
                            <li class="previous">
                                <a onclick="previous()" style="border-radius: 4px; cursor: pointer;">
                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li class="next">
                                <a onclick="next()" style="border-radius: 4px; cursor: pointer;">
                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <a class="twitter-timeline" data-chrome="nofooter" data-height="600" href="https://twitter.com/SANERconf?ref_src=twsrc%5Etfw">Tweets by SANERconf</a>
                    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                </div>
            </div>
        </div><!-- end of row -->
        <div class="row">
            <div class="col-md-12 padd">
                <div class="panel panel-warning" style="border-radius: 4px;">
                    <div class="panel-heading clearfix">
                        <div class="panel-title text-center"><i class="fa fa-life-ring" aria-hidden="true"></i>&nbsp;Sponsors</div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tbody>
                                <!-- SUPPORTED -->
                                <tr>
                                    <td class="col-md-4" style="text-align: center;">
                                        <span class="supporter-logo">
                                            <a href="http://www.ieee.org" target="_blank">
                                                <img src="img/sponsored/ieee_home.png" alt="IEEELogo">
                                            </a>
                                        </span>
                                    </td>
                                    <td class="col-md-4" style="text-align: center;">
                                        <span class="supporter-logo">
                                            <a href="http://www.computer.org" target="_blank">
                                                <img src="img/sponsored/ieee2_home.png" alt="IEEE-CS-Logo">
                                            </a>
                                        </span>
                                    </td>
                                    <td class="col-md-4" style="text-align: center;">
                                        <span class="supporter-logo">
                                            <a href="https://www.must.edu.mo/en" target="_blank">
                                                <img src="img/sponsored/unimol_home.png">
                                            </a>
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 padd">
                <div class="panel panel-info" style="border-radius: 4px;">
                    <div class="panel-heading clearfix">
                        <div class="panel-title text-center"><i class="fa fa-life-ring" aria-hidden="true"></i>&nbsp;Supporters</div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr id="rowSupported">
                                <td style="text-align: center;">
                                    <span class="supporter-logo">
                                        <a href="https://www.huawei.com/en/" target="_blank">
                                            <img src="img/supported/huawei.png" alt="Huawei" />
                                        </a>
                                    </span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        img.ls-slide {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }
    </style>
    <!-- footer -->
    <?php require_once('./utils/footer.php'); ?>
    <!-- end footer -->

    <!-- jQuery -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
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