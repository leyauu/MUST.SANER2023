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
                        <h3>6th International Workshop on Blockchain Oriented Software Engineering</h3>
                        <p><b>Home page:</b><span>&nbsp;<a target="_blank" href="https://www.agile-group.org/iwbose2023/">https://www.agile-group.org/iwbose2023/</a></span></p>
                        <hr class="lineHr">
                    </div><!-- end top-description-text -->

                        <p style="text-align: justify;">
                            The 6th International Workshop on Blockchain Oriented Software Engineering (BOSE), held 
                            within SANER 2023 conference is aimed at gathering together researchers and practitioners 
                            to discuss the new challenges posed to software engineers by the new software technology 
                            supporting the various blockchains infrastructures. The focus of BOSE is on the (un-)application 
                            of specific software engineering development best practices to software revolving around Blockchain.
                            Motivations for this workshop are the ever-increasing interest both in the research community and 
                            in the industry on Blockchain and smart contracts principles and applications, being the management 
                            of cryptocurrencies the most popular topic. Furthermore, the last years have seen the creation of new 
                            and specialized languages for blockchain applications and smart contracts. These novelties call for 
                            specific tools, paradigms, principles, approaches and research to deal with it and for a specific Blockchain
                            Oriented Software Engineering.

                        </p>
                        <p>Workshop topics include, not exhaustively, the following:</p>
                        <ul>
                            <li>Blockchain Oriented Software Engineering</li>
                            <li>Blockchain software analysis and re-engineering</li>
                            <li>Formal specification of Blockchain behavior</li>
                            <li>Agile and Lean processes for Blockchain software development</li>
                            <li>Tools for Blockchain software distributed development and community management</li>
                            <li>Smart Contracts reengineering</li>
                            <li>Security and reliability in Blockchain and Smart Contracts</li>
                            <li>Smart Contract Testing (SCT)</li>
                            <li>Blockchain Transaction Testing (BTT) to ensure status integrity</li>
                            <li>Blockchain Software architecture, design notation and metamodels.</li>
                            <li>Smart Contracts Software architecture, design notation and metamodels.</li>
                            <li>Software Engineering for Blockchain</li>
                            <li>Applications in Economy and Finance, Internet of Things, Notarization, Supply chain
                                management</li>
                            <li>Web 3.0 – e-commerce, e-health, e-democracy, social networks, etc.</li>
                        </ul>

                </div>
            </div>
        </div>
    </section>

    <section id="what-we-do">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- <h3>Organizers</h3>
                    <hr class="lineHr"> -->
                    <p style="text-align: justify;">
                        <strong>Important Dates</strong>
                    <ul>
                        <li>Abstract submission deadline: 16 December 2022</li>
                        <li>Paper submission deadline: 23 December 2022</li>
                        <li>Notifications: 09 January 2023</li>
                        <li>Camera Ready: 16 January 2023</li>
                        <li>Workshop date: 21-24 March 2023</li>
                        <li>Submission Page: <a target="_blank" href="https://easychair.org/conferences/?conf=iwbose2023">https://easychair.org/conferences/?conf=iwbose2023</a></li>
               </ul>
                </div>
            </div>
            <!-- <?php
            $content = file_get_contents('config/production.json');
            $json = json_decode($content, true);
            ?>
            <div class="row"> <?php
                foreach ($json['workshops']['blockchainOrientedSoftwareEngineering'] as $key => $value) {
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
