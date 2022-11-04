<?php
class simp_sidebar_widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'simp_sidebar_widget',
            'Simp: Chuyên mục',
            array('description'  =>  'Widget hiển thị Widget')

        );
    }

    function form($instance)
    {
        $default = array();
        $instance = wp_parse_args((array) $instance, $default);
    }

    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        return $instance;
    }

    function widget($args, $instance)
    {
        extract($args);
    ?>

<div class="sidebar-item mb-5">
    <h3 class="sidebar-title"><?php the_field('w1_title', 'widget_' . $args['widget_id'])?></h3>
    <div class="sidebar-list-blog">
        <?php  $terms = get_field('w1_cate', 'widget_' . $args['widget_id']);
      
        if( $terms ): ?>

        <ul>
            <?php foreach( $terms as $term ): ?>
            <?php $image = '';
                    if(get_field('taxonomy_background', $term)){
                        $image = get_field('taxonomy_background', $term);
                    }else{
                        $image =  get_stylesheet_directory_uri().'/assets/images/default-taxonomy-bg.jpg';
                    } ?>
            <li class="mb-4" style="background-image:url(<?php echo $image ;?>)">
                <a class="d-flex align-items-center justify-content-between"
                    href="<?php echo esc_url( get_term_link( $term ) ); ?>">
                    <?php echo esc_html( $term->name ); ?>
                    <span
                        class="d-flex align-items-center justify-content-center rounded-circle fw-semibold"><?php echo $term->count;?></span>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>
    </div>
</div>
<?php

    }
}
add_action('widgets_init', 'create_simp_sidebar_widget');

function create_simp_sidebar_widget()
{
    register_widget('simp_sidebar_widget');
}

// Bài viết mới
class simp_sidebar_widget_2 extends WP_Widget
{
    function __construct()
    {
        parent::__construct(
            'simp_sidebar_widget_2',
            'Simp: Bài viết mới',
            array('description'  =>  'Widget hiển thị bài viết mới')

        );
    }

    function form($instance)
    {
        $default = array();
        $instance = wp_parse_args((array) $instance, $default);
    }

    function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        return $instance;
    }

    function widget($args, $instance)
    {
        extract($args);
    ?>

<div class="sidebar-item mb-5">
    <h3 class="sidebar-title">Bài viết mới</h3>
    <div class="sidebar-list-blog">
        <?php
            $custom_taxterms = wp_get_object_terms($post->ID, 'category');
            $args = array(
                'post_type' => 'post',
                'post_status' => 'publish',
                'posts_per_page' => 5,
                'orderby' => 'desc',
                'post__not_in' => array($post->ID),
            );
            $related_items = new WP_Query($args);
            if ($related_items->have_posts()) : ?>
        <div class="related-news__carousel carousel-gutter-5 flickity-preload">
            <?php while ($related_items->have_posts()) : $related_items->the_post(); ?>
                <?php get_template_part('template-parts/content-small');?>
            <?php endwhile; ?>
        </div>
        <?php endif; wp_reset_postdata(); ?>
    </div>
</div>
</div>
<?php

    }
}
add_action('widgets_init', 'create_simp_sidebar_widget_2');

function create_simp_sidebar_widget_2()
{
    register_widget('simp_sidebar_widget_2');
}