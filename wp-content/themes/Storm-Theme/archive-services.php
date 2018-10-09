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
        <div class="main_content_offer windows_offer">
            <div class="container windows_container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="main_content_offer_title"><?php the_archive_title()?></div>
                        <!-- /.main_content_offer_title -->
<!--                        <div class="main_content_offer_text windows_text">From home upgrades to storm restoration, Storm Guard offers-->
<!--                            a range of services to help you with your home.-->
<!--                        </div>-->
                        <!-- /.main_content_offer_text -->
                        <?php
                        if ( have_posts()){
                            echo '<div class="row main_content_offer_ul">';
                            while ( have_posts() ) : the_post();
                                echo '<div class="col-md-4 main_content_offer_ul_col">';
                                echo '<a href="' . get_permalink() .'">';
                                echo '<div class="main_content_offer_ul_icon">';
                                echo '<img src="' . get_field('sevicesicon')['url'] . '" />';
                                echo '</div >';
                                echo '</a >';
                                echo '<p class="main_content_offer_ul_title">' . get_field('servicestitle') . '</p>';
                                echo '<p class="main_content_offer_ul_text">' . get_field('servicebrief') . '</p>';
                                echo '</div>';
                            endwhile;
                            wp_reset_query();
                            echo '</div>';
                        }
                        ?>
                    </div>
                    <div class="windows_container_archives col-md-3">
                        <?php the_archive_title( '<h3 class="">', '</h3>' );
                        the_archive_description( '<h3 class="">', '</h3>' );
                        ?>
                        <ul>
                            <?php wp_get_archives('show_post_count=1&type=monthly&post_type=services'); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!----------------------------------------------Footer---------------------------------------------------------------->

<?php get_footer() ?>