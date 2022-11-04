<?php

/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package simp
 */

get_header();
?>

<main class="site-main pb-5">
    <?php get_template_part('section/breadcrumb') ?>
    <div class="archive-page">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="page-title--small mb-5 font-semibold">
						<?php
					/* translators: %s: search query. */
					printf(esc_html__('Kết quả tìm kiếm cho: %s', 'simp'), '<span>' . get_search_query() . '</span>');
					?></h1>
                    <?php if (have_posts()) : ?>
                    <div class="row">
                        <?php while (have_posts()) : the_post() ?>
							<div class="col-md-4">
								<?php get_template_part('template-parts/content', get_post_type());?>
							</div>
                        <?php endwhile; simp_pagination();?>
                    </div>
                    <?php else : ?>
						<p class="text-center fw-semibold">Chưa có bài viết nào trong danh mục này</p>
					<?php endif;?>
                </div>
            </div>
        </div>
    </div>


</main>

<?php
get_footer();
