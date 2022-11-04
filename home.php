<?php

/**
Template Name: Trang chủ
 */

get_header();
?>

<?php
    if (have_rows('components')) {
        while (have_rows('components')) : the_row();
            $module_name = get_row_layout();
            switch ($module_name):
                case $module_name:
                    get_template_part('components/' . $module_name);
            endswitch;
        endwhile;
    }
    ?>

<?php
get_footer();
