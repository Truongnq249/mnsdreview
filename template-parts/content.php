<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simp
 */
?>

<div class="blog-item">
    <div class="blog-item__thumbnail img-hover">
        <a href="<?php the_permalink() ?>" title="<?php the_title()?>" class=" img-block">
            <img src="<?php simp_post_thumbnail()?>" alt="<?php the_title()?>">
        </a>
    </div>
    <div class="blog-item__category text-center text-uppercase">
    <?php $taxonomy = 'category';
                $terms = wp_get_post_terms($post->ID, $taxonomy);
                //print_rr($terms);
                foreach ($terms as $term) {
                 $term_link = get_term_link( $term, $taxonomy );

                 if ( is_wp_error( $term_link ) )
                 echo $term_link->get_error_message();

                 if ( is_wp_error( $term_link ) ) {
                 continue;
                 } ?>

                <?php } ?>
        <a href="<?php echo $term_link;?>" class="position-relative">
                <?php echo $term->name ?>
        </a>
    </div>
    <h3 class="blog-item__title text-center">
        <a href="<?php the_permalink() ?>" title="<?php the_title()?>" ><?php the_title()?></a>
    </h3>
    <span class="blog-item__time d-flex align-items-center justify-content-center">
        <?php echo svg('clock')?>
        <?php echo get_the_date('d/m/Y') ?>
    </span>
</div>