<div class="about" id="about">
    <div class="container">
        <div class="about-head text-center ">
            <h3>About</h3>
        </div>
        <?php
// WP_Query arguments
$args_about = array(
    'post_type' => array('about'),
    'posts_per_page' => -1,
    'order' => 'ASC',
);

// The Query
$query_about = new WP_Query($args_about);
if ($query_about->have_posts()) {
    $count = 1;
    while ($query_about->have_posts()) {
        $query_about->the_post();
        $thumb = get_the_post_thumbnail_url();
        if ($count % 2 == 0) {
            ?>

        <div class="about-bottom-grid<?php echo $count ?>">
            <div class="col-md-6 bottomgridtext">
                <h3></h3>
                <p><?php echo get_the_content() ?></p>

            </div>
            <div class="col-md-6 bottomgridimg">
                <img src="<?php echo $thumb ?>" alt="">
                <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/about-1.png" alt=""> -->
            </div>
            <div class="clearfix"></div>
        </div>
        <?php
} else {
            ?>
        <div class="about-bottom-grid2">
            <div class="col-md-6 bottomgridimg">
                <img src="<?php echo $thumb ?>" alt="">
            </div>
            <div class="col-md-6 bottomgridtext bottomleft">
                <h3></h3>
                <p><?php echo get_the_content() ?></p>

            </div>
            <div class="clearfix"></div>
        </div>
        <?php
}
        $count++;

    }
}
?>
    </div>
</div>