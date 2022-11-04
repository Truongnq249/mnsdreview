<div class="blog-item--small d-flex flex-wrap">
    <div class="blog-item__thumbnail">
        <a href="<?php the_permalink()?>" class="img-block">
            <img src="<?php simp_post_thumbnail()?>" alt="<?php the_title();?>">
        </a>
    </div>
    <div class="blog-item__content">
        <h4 class="blog-item__title"><a href="<?php the_permalink()?>"><?php the_title();?></a></h4>
        <span class="blog-item__date text-grey d-flex align-items-center">
            <?php echo svg('clock')?>
            <?php echo get_the_date('d/m/Y') ?>
        </span>
    </div>
</div>