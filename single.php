<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package simp
 */

get_header();

?>

<main>
    <div class="container">
        <div class="single-blog__head position-relative">
            <img class="w-100 h-100 position-absolute" src="<?php 
                if(get_field('post_bg')){
                    echo get_field('post_bg');
                }else{
                   simp_post_thumbnail_full();
                }?>"
                alt="<?php the_title()?>">
            <div class="single-blog__head-content text-center bg-white position-absolute">
                <div class="d-flex justify-content-center">
                    <h4 class="single-blog__head-category mb-4 position-relative">
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
                    </h4>
                </div>
                <h1 class="single-blog__title mb-4 fw-bold"><?php the_title()?></h1>
                <div class="single-blog__time d-flex justify-content-center align-items-center">
                    <?php echo svg('clock')?>
                    <?php echo get_the_date('d/m/Y') ?>
                </div>
            </div>
        </div>
        <div class="single-blog__content">
            <div class="row">
                <div class="col-lg-9">
                    <div class="post-content py-5">
                        <?php while (have_posts()) :
                            the_post();
                            the_content();
                        endwhile; ?>
                    </div>
                    <div class="post-tag tag-list mb-5">
                        <?php $post_tags = get_the_tags();
                            if ( ! empty( $post_tags ) ) {
                                echo '<ul class="list-unstyled d-flex flex-wrap justify-content-center">';
                                foreach( $post_tags as $post_tag ) {
                                    echo '<li><a href="' . get_tag_link( $post_tag ) . '">' . $post_tag->name . '</a></li>';
                                }
                                echo '</ul>';
                            }
                        ?>
                    </div>

                    <div class="post-comment" data-validate-email="Vui lòng nhập đúng định dạng email"
                        data-validate-required="Không để trống trường này">
                        <?php 
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;
                            ?>
                    </div>
                </div>
                <div class="col-lg-3">
                    <section class="sidebar">
                        <?php get_sidebar(); ?>
                    </section>
                </div>
            </div>
        </div>
    </div>
</main>



<?php
get_footer();