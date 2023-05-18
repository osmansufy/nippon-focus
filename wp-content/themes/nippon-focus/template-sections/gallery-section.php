<div class="gallery" id="gallery">
    <div class="container">
        <div class="w3-gallery-head">
            <h3>gallery</h3>
        </div>
    </div>
    <div class="w3_agile_services_grids">
        <?php
$images = get_field('gallery_images', 'option');
$size_full = 'full'; // (thumbnail, medium, large, full or custom size)
$size_thum = 'medium'; // (thumbnail, medium, large, full or custom size)
if ($images): ?>
        <ul class="w3l_gallery_grid" id="lightGallery">
            <?php foreach ($images as $image): ?>
            <li data-title="Blista" data-desc="Lorem Ipsum is simply dummy text of the printing."
                data-src="<?php echo esc_url($image['url']); ?>"
                data-responsive-src="<?php echo esc_url($image['url']); ?>">
                <div class="w3_gallery_grid">
                    <div class="hovereffect">
                        <a href="#">
                            <img src="<?php echo esc_url($image['sizes']['medium']); ?>" alt=""
                                class="img-responsive" />
                            <div class="overlay">
                                <p><i class="fa fa-eye" aria-hidden="true"></i></p>
                            </div>
                        </a>
                    </div>
                </div>
            </li>
            <?php endforeach;?>
        </ul>
        <?php endif;?>

    </div>

</div>