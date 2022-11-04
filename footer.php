<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package simp
 */

?>

<div class="overlay"></div>

<div class="backToTop">
    <?php echo svg('angle-double-up', '10') ?>
</div>

<footer class="footer">
    <div class="container">
        <div class="row gutter-y-20">
            <div class="col-sm-12 col-md-4">
                <div class="footer-item">
                    <h3 class="footer-item__title fw-semibold d-flex align-items-center"><?php the_field('footer_1_title','option')?></h3>
                    <div class="text-regular">
                        <?php the_field('footer_1_content','option')?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="footer-item">
                    <h3 class="footer-item__title fw-semibold d-flex align-items-center"><?php the_field('footer_2_title','option')?></h3>
                    <div class="footer-blog">
                    <?php $featured_posts = get_field('footer_2_post','option'); if( $featured_posts ): ?>
                        <?php foreach( $featured_posts as $post ): setup_postdata($post); ?>
                            <?php get_template_part('template-parts/content-small');?>
                        <?php endforeach; ?>
                    <?php  wp_reset_postdata(); ?>
                    <?php endif; ?>
                       
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="footer-item mb-5">
                    <h3 class="footer-item__title fw-semibold d-flex align-items-center"><?php the_field('footer_3_title','option')?></h3>
                    <nav class="tag-list">
                        <ul class="d-flex flex-wrap">
                            <?php while(have_rows('footer_3_tags','option')) : the_row();?>
                                <li><a href="<?php the_sub_field('link')?>"><?php the_sub_field('title')?></a></li>
                            <?php endwhile;?>
                        </ul>
                    </nav>
                </div>
                <div class="footer-item">
                    <h3 class="footer-item__title fw-semibold d-flex align-items-center">Mạng xã hội</h3>
                    <ul class="footer-social d-flex align-items-center flex-wrap">
                        <li><a class="d-flex align-items-center justify-content-center rounded-circle" href="<?php the_field('social_facebook','option')?>" target="_blank" rel="nofollow"><?php echo svg('facebook')?></a></li>
                        <li><a class="d-flex align-items-center justify-content-center rounded-circle" href="<?php the_field('social_instagram','option')?>" target="_blank" rel="nofollow"><?php echo svg('instagram')?></a></li>
                        <li><a class="d-flex align-items-center justify-content-center rounded-circle" href="<?php the_field('social_tiktok','option')?>" target="_blank" rel="nofollow"><?php echo svg('tiktok')?></a></li>
                        <li><a class="d-flex align-items-center justify-content-center rounded-circle" href="<?php the_field('social_youtube','option')?>" target="_blank" rel="nofollow"><?php echo svg('youtube')?></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-12">
                <p class="text-center footer-copyright"><?php the_field('footer_copyright','option')?></p>
            </div>
        </div>
    </div>
</footer>



<?php the_field('script_body', 'option'); ?>
<?php wp_footer(); ?>

</body>

</html>