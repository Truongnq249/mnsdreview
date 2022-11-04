<?php

/**
 Template Name: Woocommerce
 */

get_header();
?>

<main>
    <section class="site-single-news mb-5 pb-5 gini-woocommerce-page">
        <div class="container">
            <?php while (have_posts()) :
                the_post();

                the_content();

            endwhile; ?>
        </div>
    </section>
</main>

<?php
get_footer();
