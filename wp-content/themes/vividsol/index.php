        <?php
        include_once('function.php');
         get_header();
         ?>
    
        
        <?php if(have_posts()) { ?>
            <?php while(have_posts()) { ?>
            <?php the_post(); ?>
            <h2>
                <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
                    <?php the_title() ?>
                </a>
            </h2>
            <div>
                <?php vividsoltheme_post_meta(); ?>
            </div>
            <div>
            <?php the_excerpt(  )?>
            </div>
           <?php vividsoltheme_read_more(); ?>
           <?php } ?>
                <?php the_posts_pagination(); ?>
    <?php } else { ?>
    <p>sorry nothing match the criteria</p>
    <?php } ?>

    <?php get_footer(); ?>