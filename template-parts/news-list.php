<div class="news-list">
    <div class="category-date d-flex align-items-center justify-content-between">
        <span class="category news"><?php echo get_the_category()[0]->name; ?></span>
        <span class="date"><?php echo get_the_date('M d, Y'); ?></span>
    </div>
    <div class="mb-2">
        <div>
            <a href="<?php the_permalink($post->ID); ?>" class="text-black">
                <h4 class="font-weight-medium"><?php the_title(); ?></h4>
            </a>
            <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>
        </div>
        <div class="text-right">
            <a href="<?php the_permalink($post->ID); ?>" class="text-blue font-weight-medium read-more">Read More <img
                    src="<?php echo get_template_directory_uri()."/images/icons/arrow-right.svg"; ?>"
                    alt="Arrow Right"></a>
        </div>
    </div>
    <hr>
</div>