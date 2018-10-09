<?php
/*
 Template Name: Services
 */
?>
<?php  get_header() ?>
<div class="windows_background">

</div>
<!-- /.main_background -->

<div class="main_content">

    <div class="breadcrumbs container">
            <span>
                <?php function_exists('kama_breadcrumbs') && kama_breadcrumbs(' > '); ?>
            </span>
    </div>
    <div class="main_content_offer windows_offer">
        <div class="container windows_container">
            <div class="row">
                <div class="col-md-9">
                    <?php
                    $args = array(
                        'post_type' => 'services',
        //                    'posts_per_page'=> '7',
                    );
                    $post_title = get_the_title();
                    $services = new WP_Query( $args);
                    if ($services -> have_posts()){
                        echo '<div class="row main_content_offer_ul">';
                        while ( $services->have_posts() ) : $services->the_post();
                            if ($post_title != get_the_title()) {
                                echo '<div class="col-md-4 main_content_offer_ul_col">';
                                echo '<a href="' . get_permalink() .'">';
                                echo '<div class="main_content_offer_ul_icon">';
                                echo '<img src="' . get_field('sevicesicon')['url'] . '" />';
                                echo '</div >';
                                echo '</a >';
                                echo '<p class="main_content_offer_ul_title">' . get_field('servicestitle') . '</p>';
                                echo '<p class="main_content_offer_ul_text">' . get_field('servicebrief') . '</p>';
                                echo '</div>';
                            }
                        endwhile;
                        wp_reset_query();
                        echo '</div>';
                    }
                    ?>
                    <!--            --><?php
                    //            $args = array(
                    //                'post_type' => 'offers',
                    //                'posts_per_page'=> '6',
                    //                //                        'meta_key' 		=> 'year',
                    ////                        'orderby' 		=> 'meta_value_num',
                    ////                        'order' 		=> 'ASC',
                    //            );
                    //            $post_title = get_the_title();
                    //            $services = new WP_Query( $args);
                    //            if ($services -> have_posts()){
                    //                echo '<ul class="main_content_offer_ul ">';
                    //                while ( $services->have_posts() ) : $services->the_post();
                    //                    if ($post_title != get_the_title()) {
                    //                        echo '<li>';
                    //                        echo get_the_title();
                    //                        echo '<a href="#">';
                    //                        echo '<div class="main_content_offer_ul_icon">';
                    //                        echo '<img src="' . get_field('sevicesicon')['url'] . '" />';
                    //                        echo '</div >';
                    //                        echo '</a >';
                    //                        echo '<p class="main_content_offer_ul_title">' . get_field('servicestitle') . '</p>';
                    //                        echo $post_id = get_the_ID();
                    //                        echo get_the_title();
                    //                        echo '<p class="main_content_offer_ul_text">' . get_field('servicebrief') . '</p>';
                    //                        echo '</li >';
                    //                    }
                    //                endwhile;
                    //                echo '</ul>';
                    //            }
                    //            ?>
                </div>
                <div class="windows_container_archives col-md-3">
                    <?php the_archive_title( '<h3 class="">', '</h3>' ); ?>
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
