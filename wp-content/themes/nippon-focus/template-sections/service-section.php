<div id="services" class="services">
    <div class="container">
        <div class="w3-services-head">
            <h3>services</h3>
        </div>
        <!-- banner-bottom -->
        <div class="banner-bottom">
            <?php
// WP_Query arguments
$args = array(
    'post_type' => array('services'),
    'posts_per_page' => -1,
    'order' => 'ASC',
);

// The Query
$query = new WP_Query($args);
// The Loop
if ($query->have_posts()) {

    while ($query->have_posts()) {
        $query->the_post();
        // echo '<li>' . get_the_title() . '</li>';
        // $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')
        $thumb = get_the_post_thumbnail_url();
        ?>
            <div class="col-md-4 custom-pad mb-2 ">
                <div class="agileits_banner_bottom" style="background-image: url('<?php echo $thumb; ?>')">
                    <div class="agileinfo_banner_bottom_pos">
                        <div class="w3_agileits_banner_bottom_pos_grid">

                            <div class=" wthree_banner_bottom_grid_right">
                                <h4><?php echo get_the_title() ?> </h4>
                                <?php
$content = get_the_content();

        echo mb_strimwidth($content, 0, 215, '...'); // limit to 215 characters

        ?>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
}

} else {
    echo '<li>' . "no post found" . '</li>';
}
/* Restore original Post Data */
wp_reset_postdata();
?>
            <div class="service-banner-bottom1">
                <?php

$service_bottom_title = get_field('service_bottom_title', 'option');
$service_bottom_info = get_field('service_bottom_info', 'option');
?>
                <div class="w3-service-button-head">
                    <h3><?php echo $service_bottom_title ?></h3>
                </div>
                <div class="col-md-8 service1-left">
                    <div class="service-left-info">
                        <h3><?php echo $service_bottom_info ?></h3>

                    </div>
                </div>
                <div class="col-md-4 service1-right">
                    <div class="w3-service-right-button">
                        <a href="#" data-toggle="modal" data-target="#myModal2">Get in Touch</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

            <!-- //banner-bottom -->
        </div>
    </div>
    <!-- popup for sign up form -->
    <div class="modal video-modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div id="small-dialog2" class="mfp-hide book-form">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h3>Get in touch</h3>
                    <form action="#" method="post">
                        <input type="text" name="Name" placeholder="Your Name" required="" />
                        <input type="text" name="Email" class="email" placeholder="Email" required="" />
                        <input type="text" name="Mobile" placeholder="Mobile Number" required="" />
                        <textarea name="" placeholder="Quary" id="" cols="58" rows="10"></textarea>

                        <input type="submit" value="Notify Me">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- //popup for sign up form -->
</div>