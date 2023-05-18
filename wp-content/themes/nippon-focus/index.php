<?php
get_header()
?>
<!--banner-->
<?php
echo get_template_part('template-sections/banner-section')
?>
<!--//banner-->

</div>
<!-- //banner -->

<!-- about -->
<?php
echo get_template_part('template-sections/about-section')
?>
<!-- //about -->
<!-- services -->
<?php
echo get_template_part('template-sections/service-section')
?>
<!-- //services -->
<!-- team -->
<?php
echo get_template_part('template-sections/team-section')
?>
<!-- //team -->
<!-- gallery -->
<?php
echo get_template_part('template-sections/gallery-section')
?>
<!-- //gallery -->
<!-- contact -->
<?php
echo get_template_part('template-sections/contact-section')
?>
<?php

get_footer();