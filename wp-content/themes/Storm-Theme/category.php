<?php get_header(); ?>

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

    <!-- Content -->
    <div class="blog-center-align container">
        <br />
        <!-- Blog Content -->
        <div class="blog-content" >
            <div class="row">
                <div class="col-md-8">
                    <a href="" style="text-align: center"><h3><?= single_cat_title()?></h3></a>
                        <?php
                        while (have_posts() ) : the_post();
                            ?>

                                <a href="<?php the_permalink(); ?>"><p><?php the_title();?></p></a>


                        <?php          endwhile;?>
                </div>
                <div class="col-md-4 windows_container_archives">
                    <?php the_archive_title( '<h3 class="">', '</h3>' );                ?>
                    <ul>
<!--                        --><?php //wp_get_archives('show_post_count=1&type=monthly&post_type=post'); ?>
                        <?php
                        wp_list_categories();
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<br /><br /><br /><br /><br />
<?php get_footer(); ?>