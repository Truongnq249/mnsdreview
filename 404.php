<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package simp
 */

get_header();
?>
<?php get_template_part('section/breadcrumb') ?>

<main class="main-padding">
    <div class="error-404-page">
        <div class="container">
            <div class="row align-items-center gutter-y-20">
                <div class="col-md-6">
                    <h1 class="page-title fw-semibold mb-4">Lỗi 404: Không tìm thấy trang</h1>
                    <p class="fw-semibold mb-5">Có vẻ như đường dẫn bạn tìm kiếm không tồn tại. Bạn có thể thử tìm kiếm lại!</p>
                    <form action="<?php echo get_home_url()?>" class="error-404-form d-flex mb-5">
                        <input type="text" placeholder="Nhập từ khoá" name="s">
                        <button class="button-reset"><?php echo svg('search')?></button>
                    </form>
					<a href="<?php echo get_home_url()?>" class="button button-primary">Quay lại trang chủ</a>
                </div>
                <div class="col-md-6">
                    <?php echo svg('404')?>
                </div>
            </div>
        </div>
    </div>
</main>


<?php
get_footer();