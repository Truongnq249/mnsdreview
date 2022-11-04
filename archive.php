<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package simp
 */

get_header();

$term = get_queried_object();
?>

<main class="site-main pb-5">
    <?php get_template_part('section/breadcrumb') ?>
    <div class="archive-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h1 class="page-title--small mb-5 font-semibold"><?php the_archive_title();?></h1>
                    <?php if (have_posts()) : ?>
                    <div class="row">
                        <?php while (have_posts()) : the_post() ?>
							<div class="col-md-6">
								<?php get_template_part('template-parts/content', get_post_type());?>
							</div>
                        <?php endwhile; simp_pagination();?>
                    </div>
                    <?php else : ?>
						<p class="text-center fw-semibold">Chưa có bài viết nào trong danh mục này</p>
					<?php endif;?>
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