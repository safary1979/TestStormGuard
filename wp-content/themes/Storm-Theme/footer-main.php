<footer class="footer">
    <!----------------------------------------------bottom_content---------------------------------------------------------------->
    <div class="bottom_content ">
        <div class="container bottom_content_wrapper">
            <div class="row">
                <div class="col-md-6 bottom_content_wrapper_left">
                    <div class="bottom_content_wrapper_left_contact">
                        <h4>Contact Us Today</h4>
                        <p>Need more information about our services or insurance claims? Fill out the form below and
                            representitive will be in touch!
                        </p>
                        <form class="bottom_content_wrapper_left_contact_form" action="">
                            <ul>
                                <li class="name"><input type="text" placeholder="Name"></li>
                                <li class="phone"><input type="text" placeholder="Phone Number"></li>
                                <li class="zipcode"><input type="text"  placeholder="Zipcode"></li>
                                <li class="email"><input type="text"  placeholder="Email"></li>
                                <li class="li_last"><input  type="text" placeholder="What are you contacting us about?"></li>
                                <li class="textarea"><textarea  name="" id="" cols="30" rows="6" placeholder="Comments"></textarea></li>
                            </ul>
                            <div class="bottom_content_wrapper_left_contact_form_submit">
                                <button type="submit" class="btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div  class="col-md-6 bottom_content_wrapper_right">
                    <div class="bottom_content_wrapper_right_check">
                        <h4>Check Out Our Past Projects</h4>
                        <p>Want to see examples of our past work? Check out the gallery below to see projects we have completed in the past. </p>
                    </div>
                    <?php
                    $args = array(
                        'post_type' => 'gallery',
                        'posts_per_page'=> '8',
                    );
                    $gallery = new WP_Query( $args);
                    if ($gallery -> have_posts()){
                        echo '<div class="row bottom_content_wrapper_right_photo">';
                        while ( $gallery->have_posts() ) : $gallery->the_post();
                            $image = get_field('gallery_img');
                            echo '<div class="col-md-3 bottom_content_wrapper_right_photo_col">';
                            echo '<a href="' . $image['sizes']['large'] . '"  data-toggle="lightbox" data-gallery="example-gallery">';
                            echo '<img class="img-fluid" src="' . $image['sizes']['thumbnail'] . '"  />';
                            echo '</a >';
                            echo '</div>';
                        endwhile;
                        wp_reset_query();
                        echo '</div>';
                    }
                    ?>
                    <div class="bottom_content_wrapper_right_button ">
                        <a class="btn btn-warning" href="<?php echo get_permalink(304 ); ?>" >View More Photos</a>
                    </div>
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.button_content container-fluid -->
    <div class="container footer_wrapper">
        <div class="footer_wrapper_left">
            <span>Copyright 2017. Storm Guard. All Rights Reserved. Website Produced by: <a href="#">Inverse Paradox</a></span>
        </div>
            <!--                --><?php // wp_nav_menu(array(
//                    'menu'            =>  'Header Top Menu',
//                    'menu_class'      => 'footer_right',
//                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul> ' ,//
//                    'depth'           => 0
//                ));?>
        <ul class="footer_wrapper_right">
            <li><a href="#">Customer Service</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Sitemap</a></li>
        </ul>
    </div>
</footer>

<script>
    $('.slider_blocks').slick({
        arrows:false,
        dots: true,
        fade: true
    });
</script>

</body>
</html>
