<div class="team jarallax" style="margin-bottom: 40px;" id="team">
    <div class="team-dot">
        <div class="container">
            <div class="wthree-heading about-heading">
                <h3> Team</h3>

            </div>
            <div class="agile-team-grids">
                <?php

// WP_Query arguments
$args_members = array(
    'post_type' => array('members'),
    'posts_per_page' => -1,
    'order' => 'ASC',
);

// The Query
$query_members = new WP_Query($args_members);
if ($query_members->have_posts()) {

    while ($query_members->have_posts()) {
        $query_members->the_post();
        // echo '<li>' . get_the_title() . '</li>';
        // $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full')
        $thumb_member = get_the_post_thumbnail_url();
        ?>

                <div class="col-sm-4 team-grid">
                    <div class="flip-container">
                        <div class="flipper">
                            <div class="front">
                                <img src="<?php echo $thumb_member ?>" alt="" />
                            </div>
                            <div class=" back">
                                <?php

        $name = get_field("member_name", get_the_ID());
        $designation = get_field("member_designation", get_the_ID());
        $email = get_field("member_email", get_the_ID());
        ?>
                                <h4><?php echo $name ?></h4>
                                <p><?php echo $designation ?></p>
                                <div class="w3l-social">
                                    <ul>

                                        <li><a href="mailto:<?php echo $email ?>"><i class="fa  fa-rss"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php

    }
}
wp_reset_query();
?>



            </div>
        </div>
    </div>
</div>