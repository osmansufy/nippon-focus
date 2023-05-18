<div class="contact" id="contact">
    <div class="container">
        <div class="w3l-services-heading">
            <h3>Contact Us</h3>
        </div>
        <div class="agile-contact-grids">
            <div class="col-md-5 address">
                <h4>Contact Info</h4>
                <div class="address-row">
                    <div class="col-md-2 w3-agile-address-left">
                        <span class="glyphicon glyphicon-home" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 w3-agile-address-right">
                        <?php
$address_title = get_field('address_title', 'option');
$all_address = get_field('address', 'option');

?>
                        <h5><?php echo $address_title ?></h5>
                        <?php

if ($all_address) {
    foreach ($all_address as $address) {

        ?>
                        <p class="bold"><?php echo $address['address_name'] ?>
                        </p>

                        <p>
                            <?php echo $address['address_info'] ?></p>
                        <?php

    }
}
?>

                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="address-row">
                    <div class="col-md-2 w3-agile-address-left">
                        <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 w3-agile-address-right">
                        <?php
$mail_title = get_field('mail_title', 'option');
$mails = get_field('mail_info', 'option');

?>
                        <h5><?php echo $mail_title ?></h5>
                        <?php

if ($mails) {
    foreach ($mails as $mail) {
        ?>
                        <p><a href="mailto:<?php echo $mail['email_address'] ?>">
                                <?php echo $mail['email_address'] ?></a></p>
                        <p>
                            <?php
}
}
?>
                            <!-- <p><a href="mailto:nipponfocus@gmail.com">
                                    nipponfocus@gmail.com</a></p>
                            <p>
                                <a href="mailto:info@nippon-focus.com">info@nippon-focus.com</a>
                            </p> -->

                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="address-row">
                    <div class="col-md-2 w3-agile-address-left">
                        <span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
                    </div>
                    <div class="col-md-10 w3-agile-address-right">
                        <?php
$phone_title = get_field('phone_title', 'option');
$phones = get_field('phone', 'option');

?>
                        <h5><?php echo $phone_title ?></h5>
                        <?php
if ($phones) {
    foreach ($phones as $phone) {
        ?>
                        <p><?php echo $phone['phone_number'] ?></p>
                        <?php
}
}
?>
                        <!-- <p> +81 070 1183 6200 <br>+81 070 3883 9292<br>03 6909 6645</p> -->
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="col-md-7 contact-form">
                <form action="#" method="post">
                    <input type="text" name="First Name" placeholder="First Name" required="">
                    <input class="email" name="Last Name" type="text" placeholder="Last Name" required="">
                    <input type="text" name="Number" placeholder="Mobile Number" required="">
                    <input class="email" name="Email" type="text" placeholder="Email" required="">
                    <textarea name="Message" placeholder="Message" required=""></textarea>
                    <input type="submit" value="SUBMIT">
                </form>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>