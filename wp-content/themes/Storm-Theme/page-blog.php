<?php
/*
 Template Name: Blog
 */
?>
<?php  get_header() ?>


<div class="windows_background">

</div>
<!-- /.main_background -->
<!-------------------------------------------------------Main content------------------------------------------------------->
<div class="main_content container">
    <div class="breadcrumbs container">
            <span>
                <?php function_exists('kama_breadcrumbs') && kama_breadcrumbs(' > '); ?>
            </span>
    </div>
    <div class="main_content_news">
        <div class="row">
            <div class="col-md-9">
                <div class="main_content_news_content container">
                    <div class="row">
                        <?php
                        $query = new WP_Query( array(  'posts_per_page' => 0) );
                        while ($query->have_posts() ) : $query->the_post();
                            ?>
                            <div class="col-md-6">
                                <div class="main_content_news_content_box">
                                    <div class="main_content_news_content_box_photo">
                                        <div class="main_content_news_content_box_photo_date">
                                            <span><?php the_time(' M '); ?></span><?php the_time(' j '); ?>
                                        </div>
                                        <img src="<?= get_field('news_image')['sizes']['gallery_archive'] ?>" />
                                    </div>
                                    <!-- /.main_content_news_content_box_photo -->
                                    <div class="main_content_news_content_box_text">
                                        <a href="<?php the_permalink(); ?>"><h4><?php the_title();?></h4></a>
                                        <p><?php  the_excerpt() ; ?> <a href="<?php the_permalink(); ?>">Read More</a></p>
                                    </div>
                                    <!-- /.main_content_news_content_box_text -->
                                    <div class="main_content_news_content_box_author"><?= get_field('news_author') ?></div>
                                    <!-- /.main_content_news_content_box_author -->
                                </div>
                            </div>
                        <?php endwhile;?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 windows_container_archives">
                <?php the_archive_title( '<h3 class="">', '</h3>' );                ?>
                <ul>
                    <?php wp_get_archives('show_post_count=1&type=monthly&post_type=post'); ?>
                </ul>
            </div>
        </div>
    </div>
</div>

<!----------------------------------------------Footer---------------------------------------------------------------->

<?php get_footer() ?>
