<div class="gka-theme-slider">
    <!-- Swiper -->
    <div class="swiper-container gka-theme-swiper-container" aria-label="carousel">
        <div class="swiper-wrapper" aria-label="carousel">
            <?php foreach ($slider as $key => $image) { ?>
            <div class="swiper-slide" aria-label="carousel">
                <div class="view image">
                    <img src="<?php echo $image->path, $image->filename; ?>" alt="<?php echo $image->alttext; ?>"
                        class="img-fluid w-100 img-fit" aria-label="carousel">
                    <?php if($image->description || $image->alttext) { ?>
                    <div class="mask rgba-white-light">
                        <div class="slider-caption">
                            <div>
                                <p class="sub-header"></p>
                                <h1 class="font-reem font-weight-normal"><?php echo $image->alttext; ?></h1>
                                <p class="font-weight-normal desktop-only"><?php echo $image->description; ?></p>
                                <?php if($image->link) { ?>
                                <!-- <a target="_blank" href="<?php echo $image->link; ?>"
                                    class="btn custom-btn">LEARN MORE</a> -->
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <?php } ?>
        </div>

        <!-- Pagination -->
        <div class="swiper-pagination"></div>

        <!-- Navigation -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</div>