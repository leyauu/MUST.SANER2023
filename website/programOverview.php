<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once('./utils/header.php'); ?>
    <style>
        .prog_leisure td:nth-child(2) {
            font-style: italic;
        }

        .prog_social {
            background-color: #ffdddd;
        }

        .prog_social td:nth-child(2) {
            font-weight: bold;
        }

        .prog_social a {
            color: black;
        }

        .prog_global {
            background-color: #eeffee;
        }

        .prog_global td:nth-child(2) {
            font-weight: bold;
        }

        .prog_functional {
            background-color: #eeeeee;
        }

        .prog_sessions {
            background-color: #ffffff;
        }

        .prog_sessions td:nth-child(2) {
            font-weight: bold;
        }

        table.program {
            line-height: 21px;
            /*             border-color: #3a3a3a; */

            /*             border-collapse: separate; */
            /*             border-spacing: 0; */
            /*             border-width: 1px 0 0 1px; */
            border: 1px solid rgba(0, 0, 0, 0.2);
            margin: 0 0 1.5em;
        }

        .program td {
            padding: 8px;

        }

        .program tr td:nth-child(1) {
            width: 5%;
        }

        .program tr td:nth-child(2) {
            width: 50%;
        }

        .program .header td {
            padding: 8px;
        }
    </style>

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

    <!-- acceptedPapers -->
    <section id="acceptedPapers" class="content">
        <div class="container">
            <div class="row padd">
                <div class="col-md-12">
                    <h3>Program Overview</h3>
                    <hr class="lineHr">
                    <p>Coming soon!</p>
                    <!--
                    <table class="program" border="1" width="100%" cellspacing="6" cellpadding="4" align="center">
                        <tbody>
                            <tr class="header">
                                <td colspan="2" valign="top" bgcolor="#3a3a3a"><span style="color: #ffffff;"><strong>Tuesday, 20th</strong><br /></span></td>
                            </tr>
                            <tr class="prog_functional">
                                <td valign="top">08:00-09:00</td>
                                <td style="text-align: left;" align="center" valign="top">Registration</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">09:00-10:15</td>
                                <td style="text-align: left;" align="center" valign="top">Workshop Sessions (IWBOSE, IWSC, MAINT, MaLTeSQuE, VST)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">10:15-10:30</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">10:30-11:30</td>
                                <td style="text-align: left;" align="center" valign="top">Workshop Sessions (IWBOSE, IWSC, MAINT, MaLTeSQuE, VST)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">11:30-11:45</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">11:45-12:45</td>
                                <td style="text-align: left;" align="center" valign="top">Workshop Sessions (IWBOSE, IWSC, MAINT, MaLTeSQuE, VST)</td>
                            </tr>

                            <tr class="prog_leisure">
                                <td valign="top">12:45-13:45</td>
                                <td style="text-align: left;" align="center" valign="top">Lunch</td>
                            </tr>

                            <tr class="prog_sessions">
                                <td valign="top">13:45-14:45</td>
                                <td style="text-align: left;" align="center" valign="top">Workshop Sessions (IWBOSE, IWSC, MAINT, MaLTeSQuE, VST)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">14:45-15:00</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">15:00-16:00</td>
                                <td style="text-align: left;" align="center" valign="top">Workshop Sessions (IWBOSE, IWSC, MAINT, MaLTeSQuE, VST)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">16:00-16:30</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">16:30-17:30</td>
                                <td style="text-align: left;" align="center" valign="top">Workshop Sessions (IWBOSE, IWSC, MAINT, MaLTeSQuE, VST)</td>
                            </tr>

                            <tr class="prog_social">
                                <td valign="top">19:00</td>
                                <td style="text-align: left;" align="center" valign="top"><a href="socialEvents">Welcome cocktail</a></td>
                            </tr>
                        </tbody>
                    </table>




                    <table class="program" border="1" width="100%" cellspacing="6" cellpadding="4" align="center">
                        <tbody>
                            <tr class="header">
                                <td colspan="2" valign="top" bgcolor="#3a3a3a"><strong><span style="color: #ffffff;">Wednesday, 21st </span></strong></td>
                            </tr>
                            <tr class="prog_functional">
                                <td valign="top">08:00-08:30</td>
                                <td style="text-align: left;" align="center" valign="top">Registration</td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">08:30-09:00</td>
                                <td style="text-align: left;" align="center" valign="top">Opening</td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">09:00-10:15</td>
                                <td style="text-align: left;" align="center" valign="top">Keynote (Elmar Jurgens)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">10:15-10:30</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">10:30-11:30</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (research, demo, industry, RENE)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">11:30-11:45</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">11:45-12:45</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (research, demo, industry, RENE)</td>
                            </tr>

                            <tr class="prog_leisure">
                                <td valign="top">12:45-13:45</td>
                                <td style="text-align: left;" align="center" valign="top">Lunch</td>
                            </tr>

                            <tr class="prog_sessions">
                                <td valign="top">13:45-14:45</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (research, demo, industry, RENE)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">14:45-15:00</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">15:00-16:00</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (research, demo, industry, RENE)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">16:00-16:30</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">16:30-17:30</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (research, demo, industry, RENE)</td>
                            </tr>

                            <tr class="prog_social">
                                <td valign="top">19:00</td>
                                <td style="text-align: left;" align="center" valign="top"><a href="socialEvents">Reception</a></td>
                            </tr>
                        </tbody>
                    </table>




                    <table class="program" border="1" width="100%" cellspacing="6" cellpadding="4" align="center">
                        <tbody>
                            <tr class="header">
                                <td colspan="2" valign="top" bgcolor="#3a3a3a"><strong><span style="color: #ffffff;">Thursday, 22nd </span></strong></td>
                            </tr>
                            <tr class="prog_functional">
                                <td valign="top">08:00-09:00</td>
                                <td style="text-align: left;" align="center" valign="top">Registration</td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">09:00-10:15</td>
                                <td style="text-align: left;" align="center" valign="top">Keynote (Jan Bosch)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">10:15-10:30</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">10:30-11:30</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (research, demo, industry, RENE)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">11:30-11:45</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">11:45-12:45</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (research, demo, industry, RENE)</td>
                            </tr>

                            <tr class="prog_leisure">
                                <td valign="top">12:45-13:45</td>
                                <td style="text-align: left;" align="center" valign="top">Lunch</td>
                            </tr>

                            <tr class="prog_sessions">
                                <td valign="top">13:45-14:45</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (research, demo, industry, RENE)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">14:45-15:00</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">15:00-16:00</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (research, demo, industry, RENE)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">16:00-16:30</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">16:30-17:15</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (research, demo, industry, RENE)</td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">17:15-18:00</td>
                                <td style="text-align: left;" align="center" valign="top">Open Steering Committee Meeting</td>
                            </tr>

                            <tr class="prog_social">
                                <td valign="top">19:00</td>
                                <td style="text-align: left;" align="center" valign="top"><a href="socialEvents">Banquet</a></td>
                            </tr>
                        </tbody>
                    </table>



                    <table class="program" border="1" width="100%" cellspacing="6" cellpadding="4" align="center">
                        <tbody>
                            <tr class="header">
                                <td colspan="2" valign="top" bgcolor="#3a3a3a"><strong><span style="color: #ffffff;">Friday, 23rd </span></strong></td>
                            </tr>
                            <tr class="prog_functional">
                                <td valign="top">08:00-09:00</td>
                                <td style="text-align: left;" align="center" valign="top">Registration</td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">09:00-10:15</td>
                                <td style="text-align: left;" align="center" valign="top">Keynote (Peter Gromov)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">10:15-10:30</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">10:30-11:30</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (research, demo, industry, RENE)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">11:30-11:45</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">11:45-12:45</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (research, demo, industry, RENE)</td>
                            </tr>

                            <tr class="prog_leisure">
                                <td valign="top">12:45-13:45</td>
                                <td style="text-align: left;" align="center" valign="top">Lunch</td>
                            </tr>

                            <tr class="prog_sessions">
                                <td valign="top">13:45-14:45</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (research, demo, industry, RENE)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">14:45-15:00</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_sessions">
                                <td valign="top">15:00-16:00</td>
                                <td style="text-align: left;" align="center" valign="top">Technical Sessions (research, demo, industry, RENE)</td>
                            </tr>
                            <tr class="prog_leisure">
                                <td valign="top">16:00-16:30</td>
                                <td style="text-align: left;" align="center" valign="top">Coffee Break</td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">16:30-17:30</td>
                                <td style="text-align: left;" align="center" valign="top">Most Influential Papers</td>
                            </tr>
                            <tr class="prog_global">
                                <td valign="top">17:30-18:00</td>
                                <td style="text-align: left;" align="center" valign="top">Closing</td>
                            </tr>
                        </tbody>
                    </table>
-->
                </div>
            </div>
        </div><!-- end of row -->
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
    <script src="js/greensock.js"></script>
    <script src="js/layerslider.transitions.js"></script>
    <script src="js/layerslider.kreaturamedia.jquery.js"></script>
    <script src="js/importantDates.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        /* DOPO APERTURA DEL MODAL */
        $("#bioBosh, #abstractBosh").on('shown.bs.modal', function(e) {
            $('li.zm-active').removeClass('zm-active')
        });
        /* DOPO LA CHIUSURA DEL MODAL */
        $("#bioBosh, #abstractBosh").on('hidden.bs.modal', function(e) {
            $('#key').addClass('zm-active')
        });
    </script>

    <script>
        //Animation Wow.js
        new WOW().init();
    </script>

</body>

</html>
