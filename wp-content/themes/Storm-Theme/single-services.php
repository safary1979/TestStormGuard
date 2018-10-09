<?php  get_header() ?>

    <!-------------------------------------------------------Main background------------------------------------------------------->
    <div class="windows_background">

    </div>
    <!-- /.main_background -->
    <!-------------------------------------------------------Main content------------------------------------------------------->
    <div class="main_content">
        <div class="breadcrumbs container">
        <span>
            <?php function_exists('kama_breadcrumbs') && kama_breadcrumbs(' > '); ?>
        </span>
        </div>
        <!----------------------------------------------Windows--------------------------------------------------------->
        <div class="windows container">
            <div class="windows_left">
<!--                <img src="--><?php //echo get_template_directory_uri();?><!--/assets/img/windows/windows.png" alt="">-->
                <?php echo '<img src="' . get_field('serviceimage')['sizes']['service_content'] . '" />';?>
            </div>
            <!-- /.wwa_content_wwa_left -->
            <div class="windows_right">
                <h4><?php the_title()?></h4>
                <p><?php  the_post(); the_content(); ?></p>

            </div>
            <!-- /.wwa_content_wwa_right -->
        </div>
        <!-- /.wwa_content_wwa container -->
        <!----------------------------------------------Offer---------------------------------------------------------------->
        <div class="main_content_offer windows_offer">
            <div class="container windows_container">
                <div class="main_content_offer_title">View Our Other Services</div>
                <!-- /.main_content_offer_title -->
                <div class="main_content_offer_text windows_text">From home upgrades to storm restoration, Storm Guard offers
                    a range of services to help you with your home.
                </div>
                <!-- /.main_content_offer_text -->
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
            <!-- /.container -->
        </div>
        <!-- /.container main_content_offer -->

        <!----------------------------------------------Ready--------------------------------------------------------------->
        <div class=" container main_content_ready windows_ready_padding_sm">
            <div class=" main_content_ready_title">
                <h3>Ready To Get Started?</h3>
                <p>Damage to your home or business from a storm? <br />
                    Looking to replace your old roof or siding? Get Started below!</p>
            </div>
            <ul class="main_content_ready_ul">
                <li>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/ready/residential-repair.png" alt="">
                    <a href="#">Residential Repair</a>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/ready/commercial-repair1.png" alt="">
                    <a href="#">Commercial Repair</a>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri();?>/assets/img/ready/insurance-claims.png" alt="">
                    <a href="#">Insurance Claims</a>
                </li>
            </ul>
        </div>
        <!-- /.container main_content_ready -->
        <!----------------------------------------------Search--------------------------------------------------------->
        <div class="main_content_search wwa_search_padding">
            <div class="main_content_search_box container">
                <!--<div class="row align-items-center">-->
                <div class="main_content_search_box_left">
                    <h3>Find A Franchise Near You</h3>
                    <h6>Want to speak to us in person? Enter your zip code to find the nearest franchise.</h6>
                </div>
                <!-- /.main_content_search_left -->
                <div class="main_content_search_box_right ">
                    <form action="" class="">
                        <input class="input_code" type="text" placeholder="Enter Zip Code">
                        <button class="button_submit btn " type="submit" value="Submit">Submit</button>
                    </form>
                </div>
                <!-- /.main_content_search_right -->
            </div>
            <!-- /.container container -->
        </div>
        <!-- /.main_content_search -->
    </div>
    <!-- /.main_content -->

    <!----------------------------------------------Footer---------------------------------------------------------------->

<?php get_footer() ?>