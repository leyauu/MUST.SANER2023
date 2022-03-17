<section class="content" id="sectionRegistration">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p style="text-align:justified;">
                    <?php
                    if ($registration_open) {
                        echo "The <a href=\"$registration_link\">registration system</a> is open.<br/>";
                    } else {
                        echo "The registration system will be open from January 1st, 2023.";
                    }
                    ?>

                    At least <b>one author per paper</b> has to register before February 22nd, 2023. Student authors can register at student rates unless the student is the sole author attending for a given paper. In that case, the author must register at professional rate (see below).
                </p>

                <!--For registering you first need to create an account. Using the account, you can register to all SANER events. Note, modifications are only possible as long as the payment has not been performed.</p>-->

                <!--<p style="text-align:justified;">Please select the corresponding registration type. Furthermore, please complete the payment to guarantee your registration. A receipt for your registration fee is separately issued and will be available at the registration desk on site.</p>-->

                <p style="text-align:justified;">The deadline for early registration is 23:59 of <del>February 22nd, 2023</del> <b>March 1st, 2023</b>, Central Europe Time (GMT+1)</p>

                <p style="text-align:justified;">The deadline for online registration is 23:59 of <b>March 18th, 2023, Central Europe Time (GMT+1)</b></p>

                <p style="text-align:justified;">For questions about the registration, please contact <a href="mailto:<?= $registration_mail ?>"><?= $registration_mail ?></a>.</p>

                <p>&nbsp;</p>

                <h4>Fees</h4>
                <table>
                    <tbody>
                        <tr>
                            <td valign="top" bgcolor="#3a3a3a" width="200" style="font-weight: bold;"><span style="color: #ffffff;">Membership</span></td>
                            <td valign="top" bgcolor="#3a3a3a" width="207" style="font-weight: bold;"><span style="color: #ffffff;">Registration Type</span></td>
                            <td valign="top" bgcolor="#3a3a3a" width="106" style="font-weight: bold;"><span style="color: #ffffff;">Early Registration</span></td>
                            <td valign="top" bgcolor="#3a3a3a" width="98" style="font-weight: bold;"><span style="color: #ffffff;">Late Registration</span></td>
                        </tr>
                        <tr>
                            <td>IEEE/IEEE CS Membership (professional rate)<sup>+</sup></td>
                            <td><a href="<?= $registration_all_events ?>">All Events</a></td>
                            <td>500 €</td>
                            <td>600 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="<?= $registration_one_day ?>">One Day</a></td>
                            <td>200 €</td>
                            <td>240 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="<?= $registration_one_day ?>">Workshops</a></td>
                            <td>200 €</td>
                            <td>240 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Non member (professional rate)<sup>+</sup></td>
                            <td><a href="<?= $registration_all_events ?>">All Events</a></td>
                            <td>600 €</td>
                            <td>720 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="<?= $registration_one_day ?>">One Day</a></td>
                            <td>250 €</td>
                            <td>300 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="<?= $registration_one_day ?>">Workshops</a></td>
                            <td>250 €</td>
                            <td>300 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>IEEE/IEEE CS Student Member<sup>*+</sup></td>
                            <td><a href="<?= $registration_all_events ?>">All Events</a></td>
                            <td>350 €</td>
                            <td>420 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="<?= $registration_one_day ?>">One Day</a></td>
                            <td>140 €</td>
                            <td>180 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="<?= $registration_one_day ?>">Workshops</a></td>
                            <td>140 €</td>
                            <td>180 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>CS Student Non member<sup>*</sup></td>
                            <td><a href="<?= $registration_all_events ?>">All Events</a></td>
                            <td>420 €</td>
                            <td>520 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="<?= $registration_one_day ?>">One Day</a></td>
                            <td>180 €</td>
                            <td>220 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="<?= $registration_one_day ?>">Workshops</a></td>
                            <td>180 €</td>
                            <td>220 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>IEEE Life Member<sup>+</sup></td>
                            <td><a href="<?= $registration_all_events ?>">All Events</a></td>
                            <td>300 €</td>
                            <td>350 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="<?= $registration_one_day ?>">One day</a></td>
                            <td>200 €</td>
                            <td>240 €</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><a href="<?= $registration_one_day ?>">Workshop</a></td>
                            <td>200 €</td>
                            <td>240 €</td>
                        </tr>
                    </tbody>
                </table>

                <p style="text-align:justified;">
                    <sup>*</sup>Students are requested to show their Student ID issued by their affiliation at the registration desk.<br />
                    <sup>+</sup>IEEE members are requested to show their IEEE membership card at the registration desk.
                </p>

                <p>&nbsp;</p>

                <h4>What is covered</h4>

                <table>
                    <tbody>
                        <tr>
                            <td valign="top" bgcolor="#3a3a3a" width="20%"><span style="color: #ffffff;">Registration Type</span></td>
                            <td valign="top" bgcolor="#3a3a3a" width="80%"><span style="color: #ffffff;">Covered</span></td>
                        </tr>
                        <tr>
                            <td>All events</td>
                            <td>Proceedings, 1 welcome dinner ticket, 1 banquet ticket, 1 reception ticket, 4 lunch tickets, and access to all SANER sessions</td>
                        </tr>
                        <tr>
                            <td>Workshops</td>
                            <td>Proceedings, lunch ticket, and access to the workshops sessions<sup>1</sup></td>
                        </tr>
                        <tr>
                            <td>One day</td>
                            <td>Proceedings, lunch ticket, and access to the sessions of one day of the main conference<sup>1</sup></td>
                        </tr>
                    </tbody>
                </table>

                <p style="text-align:justified;">
                    <sup>1</sup> Social events tickets are NOT included.
                </p>

                <p>&nbsp;</p>

                <table>
                    <tbody>
                        <tr>
                            <td valign="top" bgcolor="#3a3a3a" width="135"><span style="color: #ffffff;">Extra Ticket</span></td>
                            <td valign="top" bgcolor="#3a3a3a" width="207"><span style="color: #ffffff;">Fee</span></td>
                        </tr>
                        <tr>
                            <td>Welcome Dinner Ticket</td>
                            <td>40 Euro per person</td>
                        </tr>
                        <tr>
                            <td>Banquet Ticket</td>
                            <td>80 Euro per person</td>
                        </tr>
                        <tr>
                            <td>Reception Ticket</td>
                            <td>40 Euro per person</td>
                        </tr>
                    </tbody>
                </table>

                <p>&nbsp;</p>

                <h4>Changes and Cancellation Policy</h4>
                <p style="text-align:justified;">
                    <strong>Changes</strong> of already paid registrations are only possible through the SANER 2023 registration office. Send an email mentioning your registration id and listing your changes to <a href="mailto:<?= $registration_mail ?>"><?= $registration_mail ?></a>.
                </p>
                <p style="text-align:justified;">
                    <strong>Cancellations</strong> of already paid registrations are only possible through the SANER 2023 registration office. Send an email mentioning your registration id to <a href="mailto:<?= $registration_mail ?>"><?= $registration_mail ?></a>. Cancellations made until <strong>February 22nd, 2023</strong> will be accepted subject to a <strong>50 Euro</strong> cancellation fee. Refunds will be made within 30 days after the end of the conference. Cancellations will not be accepted after February 22nd, 2023.
                </p>
                <p style="text-align:justified;">
                    <strong>“No shows”</strong> are not refundable and are liable for the full registration fee. Instead of cancelling, your registration may be transferred to a colleague. If you would like to transfer your registration to a colleague, please email <a href="mailto:<?= $registration_mail ?>"><?= $registration_mail ?></a>.
                </p>
            </div>
        </div><!-- end row -->
    </div><!-- end container -->
</section>
