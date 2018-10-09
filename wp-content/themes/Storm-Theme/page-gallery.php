<?php
/*
 Template Name: Gallery
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
                        'post_type' => 'gallery',
                        'posts_per_page'=> '-1',
                    );
                    $gallery = new WP_Query( $args);
                    if ($gallery -> have_posts()){
                        echo '<div class="row ">';
                        while ( $gallery->have_posts() ) : $gallery->the_post();
                            $image = get_field('gallery_img');
                            echo '<div class="col-md-4 windows_container_gallery">';
                            echo '<a href="' . $image['sizes']['large'] . '"  data-toggle="lightbox" data-gallery="example-gallery">';
                            echo '<img class="img-fluid" src="' . $image['sizes']['gallery_archive'] . '"  />';
                            echo '</a >';
                            echo '</div>';
                        endwhile;
                        wp_reset_query();
                        echo '</div>';
                    }
                    ?>
                </div>
                <div class="windows_container_archives col-md-3">
                    <?php the_archive_title( '<h3 class="">', '</h3>' ); ?>
                    <ul>
                        <?php wp_get_archives('show_post_count=1&type=monthly&post_type=gallery'); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!----------------------------------------------Footer---------------------------------------------------------------->

<?php get_footer() ?>
