<!--Slider-->
<div class="w3l_banner_info">
    <div class=" slider">
        <div class="callbacks_container">

            <?php

$all_slider = get_field('slider_item', 'option');
if ($all_slider) {
    echo "<ul class='rslides' id='slider3'>";
    foreach ($all_slider as $slider) {
        ?>
            <li>
                <div class="slider_banner_info">
                    <h4><?php echo $slider['slider_heading'] ?></h4>
                    <p><?php echo $slider['slider_content'] ?></p>
                </div>

            </li>
            <?php
}
    echo " </ul>";
}

?>
            <!-- <li>
                    <div class="slider_banner_info">
                        <h4>confident business</h4>
                        <p>Contribute to society by creating value through innovation and entrepreneurship Empowering
                            people to realize their hopes and dreams, Embracing new thinking, Nippon Focus changes the
                            world through innovation.</p>
                    </div>

                </li>
                <li>
                    <div class="slider_banner_info">
                        <h4>Our Philosophy </h4>
                        <p>Nippon Focus’s mission is to contribute to society of foreigner by creating value through
                            innovation and entrepreneurship. By providing high-quality services that help our users and
                            partners grow, we aim to advance and enrich society. To fulfil our role as a Global
                            Innovation Company, we are committed to maximizing both corporate and customer value</p>
                    </div>

                </li>
                <li>
                    <div class="slider_banner_info">
                        <h4> business consulting</h4>
                        <p>Our experts know how to solve your company’s issues We provide top consulting services since
                            2020 Experience the highest level of business assistance.</p>
                    </div>

                </li>
                <li>
                    <div class="slider_banner_info">
                        <h4>business services</h4>
                        <p>We provide top consulting services since 2020 Our experts know how to solve your company’s
                            issues Experience the highest level of business assistance. </p>
                    </div>

                </li> -->

        </div>
    </div>
    <div class="clearfix"></div>
    <!--//Slider-->

</div>