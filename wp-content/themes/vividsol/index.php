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
    <?php } 
    else { ?>
    <h1><?php esc_html_e('sorry nothing match the criteria','Vividsol'); ?></h1>
    <?php } ?>

    <?php  

    $city='Lahore';
    echo esc_html__( 'Your city is ', 'Vividsol' ).$city;
    printf(
        /* translators %s is the city name */
        esc_html__( 'Your city is %s', 'firstname'),
        $city

    );
        // $comments=3;
        // printf(_n('One comment','%s comments: ',$comments,'Vividsol'),$comments);
        // // printf('this post have %s comments ', $comments);
        // _ex('Post','verb','Vividsol');
    ?>

    <?php get_footer(); ?>