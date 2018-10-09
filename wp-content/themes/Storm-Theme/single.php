<?php
/* Template Name: Archive Page Custom */
get_header(); ?>

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
    <?php
    if( have_posts() ): while( have_posts() ): the_post();
//        echo "<pre>";
//        print_r(get_field('news_image')['sizes']);
//        echo "</pre>"
        ?>
        <section class="container">
        <h1><?php the_title(); ?></h1>
            <div class="row">
                <section class="col-md-9 "  >
                    <div class="">
                        <img class="image" src="<?= get_field('news_image')['sizes']['medium_large'] ?>" />
                        <br>
                    </div>
                    <p><?php the_content() ?></p>
                </section>
                <div class="windows_container_archives col-md-3 ">
                    <?php the_archive_title( '<h3 class="">', '</h3>' );                ?>
                    <ul>
                        <?php wp_get_archives('show_post_count=1&type=monthly&post_type=post'); ?>
                    </ul>
<!--                    <h4>Latest News</h4>-->
<!--                        --><?php
//                            $more = 0;
//                            $query = new WP_Query( array(  'posts_per_page' => 10) );
//                            while ( $query->have_posts() ) {
//                            $query->the_post();
//                            ?>
<!---->
<!--                        <div class="row">-->
<!--                            <div class="col-md-5">-->
<!--                                <a href="--><?php //the_permalink(); ?><!--"><img src="--><?//= get_field('news_image')['sizes']['gallery_footer'] ?><!--" /></a>-->
<!--                            </div>-->
<!--                            <div class=" col-md-7 ">-->
<!--                                <a  href="--><?php //the_permalink(); ?><!--">--><?php //the_time('j M Y'); ?><!--</a><br>-->
<!--                                <p>--><?php //the_title(); ?><!--</p>-->
<!---->
<!--                            </div>-->
<!--                        </div><br />-->
<!--                    --><?php
//                            }
//                            wp_reset_postdata();
//                            ?>
                </div>
            </div>
        </section>
        <?php
        endwhile;
        endif;?>
</div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

    <!----------------------------------------------Footer---------------------------------------------------------------->

<?php get_footer() ?>