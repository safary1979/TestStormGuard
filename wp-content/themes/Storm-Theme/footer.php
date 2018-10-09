<footer class="footer">
    <div class="bottom_content_wwa ">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="bottom_content_wwa_contact">
                        <h4>Contact Us Today</h4>
                        <p>Need more information about our services or insurance claims? Select who
                            from Storm Guard you would like information from and fill the out form. </p>
                        <div class="bottom_content_wwa_contact_button">
                            <a class="btn btn-primary" href="#" >Contact Your Local Storm Guard Franchise</a>
                        </div>
                        <div class="bottom_content_wwa_contact_button">
                            <a class="btn btn-primary" href="#" >Contact the Storm Guard Corporate Office</a>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
                <div class="col-md-6">
                    <div class="bottom_content_wwa_check">
                        <h4>Check Out Our Past Projects</h4>
                        <p>Want to see examples of our past work? Check out the gallery below to see projects we have completed in the past.
                            <a href="#">View the whole portfolio.</a>
                        </p>
                    </div>
                        <?php
                        $args = array(
                            'post_type' => 'gallery',
                            'posts_per_page'=> '8',
                        );
                        $gallery = new WP_Query( $args);
                        if ($gallery -> have_posts()){
                            echo '<div class="row bottom_content_wwa_photo">';
                            while ( $gallery->have_posts() ) : $gallery->the_post();
                                $image = get_field('gallery_img');
                                    echo '<div class="col-md-3 bottom_content_wwa_photo_col">';
                                    echo '<a href="' . $image['sizes']['large'] . '"  data-toggle="lightbox" data-gallery="example-gallery">';
                                    echo '<img class="img-fluid" src="' . $image['sizes']['thumbnail'] . '"  />';
                                    echo '</a >';
                                echo '</div>';
                            endwhile;
                            wp_reset_query();
                            echo '</div>';
                        }
                        ?>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.button_content container-fluid -->
    <div class="container footer_wrapper">
        <div class="footer_wrapper_left">
            <span>Copyright 2017. Storm Guard. All Rights Reserved. Website Produced by: <a href="#">Inverse Paradox</a></span>
        </div>
        <?php  wp_nav_menu(array(
            'menu'            =>  'Footer Menu',
            'menu_class'      => 'footer_wrapper_right',
            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul> ' ,
            'depth'           => 0
        ));?>
    </div>
</footer>


</body>
</html>
