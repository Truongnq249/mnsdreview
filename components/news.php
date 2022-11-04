<section class="blog">
    <div class="container">
        <div class="row">
            <?php $featured_posts = get_sub_field('news_chosen'); if( $featured_posts ): ?>
                <?php foreach( $featured_posts as $post ): setup_postdata($post); ?>
                   <div class="col-sm-12 col-md-6 col-lg-4">
                        <?php get_template_part('template-parts/content') ?>
                   </div>
                <?php endforeach; ?>
            <?php  wp_reset_postdata(); ?>
            <?php endif; ?>
            
        </div>
    </div>
</section>