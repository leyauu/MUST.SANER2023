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
                    <h3>2nd International Workshop on Quantum Software Analysis, Evolution and Reengineering</h3>
                    <p><b>Home page:</b><span>&nbsp;<a target="_blank" href="https://q-se.github.io/qsaner2023/">https://q-se.github.io/qsaner2023/</a></span></p>
                    <hr class="lineHr">
                </div><!-- end top-description-text -->
                <p style="text-align: justify;">
                    Quantum computing (QC) aims to solve a multitude of complex problems, e.g., in medicine, finance, aerospace, and simulation. Solving such problems requires developing quantum software. 
					Building reliable, correct, and correct quantum software is essential to realize the promised revolutionary QC applications. To this end, the field of quantum software engineering (QSE) 
					is emerging, which covers many aspects such as requirements engineering, modeling, programming, testing and debugging. Each of these aspects is a big research area, and demands investigation of its own. 
					The Q-SANER workshop will in particular focus on the quantum software (including circuits) analysis, evolution, and reengineering aspects of QSE. Moreover, it will also cover other related aspects of 
					quantum software, i.e., software analysis, evolution, and reengineering of quantum software compilers, quantum computer emulators, and quantum software development environments.
					The key goals of the workshop are: 1) Discussion on how to apply and extend existing approaches in software analysis, evolution and reengineering techniques from the classical domain to quantum software and quantum circuits, 
					or develop entirely new approaches; 2) Facilitate collaboration on quantum software analysis, evolution and reengineering between industry and academia; 3) Discussion on the educational aspects related to quantum software analysis, 
					evolution and reengineering; 4) Discuss the challenges and future research directions; 5) Disseminate the results to practitioners with the aim of influence their current practise.
                </p>
                <br>
                <p>Quantum software analysis, evolution, and reengineering including but not limited to:</p>
                <ul>
                    <li>Analyses for Quantum Circuits and Software.</li>
                    <li>Evolution of Quantum Circuits and Software.</li>
                    <li>Quantum Circuits and Program Comprehension.</li>
                    <li>Re-engineering of Quantum Circuits and Software.</li>
                    <li>Quantum Software Architectures (both hybrid and pure quantum).</li>
                    <li>Evolution and Maintenance of Quantum Programming Languages, Compilers.</li>
                    <li>Evolution and Maintenance of Quantum Computer Emulators.</li>
					<li>Mining Quantum Circuits and Software.</li>
					<li>Intuitive Quantum Software Visualization Techniques for Classical Software Engineers.</li>
					<li>Quantum Circuit and Software Maintenance and Repairing.</li>
					<li>Renengineering of Quantum Computer Emulators.</li>
					<li>Analysis, evolution, and reengineering of quantum software development environments.</li>
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
                        <li>Submission: 18 December 2022</li>
                        <li>Notifications: 08 January 2023</li>
                        <li>Camera Ready: 13 January 2023</li>
                        <li>Submission Page: <a target="_blank" href="https://q-se.github.io/qsaner2023/TBA">https://q-se.github.io/qsaner2023/TBA (TBA)</a></li>
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
