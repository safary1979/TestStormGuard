<?php
/*
 Template Name: Home
 */
?>
<?php  get_header() ?>
<!-------------------------------------------------------Main background------------------------------------------------------->
<div class="main_background">
    <div class="container">
        <div class="main_background_box">
            <h2 class="main_background_box_text">
                <p>
                    Does Your Home or Property Have <?php the_field('service_name_main')?><strong>Storm Damage</strong> or
                    <strong>Need an Update</strong>?
                </p>
            </h2>
            <!--<div class="main_background_box_link">-->
            <a class="btn btn-warning" href="#" >Contact Us Today <img src="<?php echo get_template_directory_uri();?>/assets/img/arrow-right.png" alt=""></a>
            <!-- /.main_background_box_link -->
        </div>
        <!-- /.main_background_box -->
    </div>
    <!-- /.container -->
</div>
<!-- /.main_background -->
<!-------------------------------------------------------Main content------------------------------------------------------->
<div class="main_content">
    <!----------------------------------------------Search--------------------------------------------------------->
    <div class="main_content_search">
        <div class="main_content_search_box container">
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
        <!-- /.main_content_search_box container -->
    </div>
    <!-- /.main_content_search -->
    <!----------------------------------------------Offer---------------------------------------------------------------->

    <div class="main_content_offer">
        <div class="container">
            <?php
            $args = array(
                'post_type' => 'theme_setting',
                'posts_per_page'=> '1',
            );
            $theme_setting = new WP_Query($args);
            if ($theme_setting -> have_posts()){
                while ( $theme_setting->have_posts() ) : $theme_setting->the_post();
            ?>
            <div class="main_content_offer_title">
                <?php the_field('service_name_main'); ?>
            </div>
            <!-- /.main_content_offer_title -->
            <div class="main_content_offer_text">
                <?php the_field('service_text'); ?>
            </div>
            <?php
                endwhile;
                wp_reset_query();
            }
            $args = array(
                'post_type' => 'services',
                'posts_per_page'=> '6',
            );
            $services = new WP_Query( $args);
            if ($services -> have_posts()){
                echo '<div class="row main_content_offer_ul ">';
                while ( $services->have_posts() ) : $services->the_post();
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
            <div class="main_content_offer_button ">
                <a class="btn btn-warning" href="<?php echo get_permalink(14 ); ?>" >View All Services</a>
            </div>
            <!-- /.main_content_offer_button -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.container main_content_offer-->

    <!----------------------------------------------Ready--------------------------------------------------------------->
    <div class=" container main_content_ready">
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
    <!----------------------------------------------Slider---------------------------------------------------------------->
    <div class=" slider">
        <div class="slider_title">
            <?php
            if( get_field('slider_title') ): ?>
                <?php the_field('slider_title'); ?>
            <?php endif; ?>
        </div>
        <!-- /.slider_title -->
        <?php
        if( have_rows('repeterslider') ):?>
        <div class="container">
            <div class="slider_blocks">
                <?php while ( have_rows('repeterslider') ) : the_row();?>
                <div class="slider_blocks_block">
                    <div class="slider_blocks_block_text">
                        <?php the_sub_field('slider_brief');?>
                    </div>
                    <div class="slider_blocks_block_author">
                        <?php the_sub_field('slider_author'); echo '<br />'?>
                        <?php the_sub_field('slider_profession');?>
                    </div>
                </div>
                <?php endwhile;
                wp_reset_query();?>
            </div>
        </div>
        <?php
        endif;  ?>
        <!-- /.container -->
    </div>
    <!-- /.sladers -->
    <!----------------------------------------------News---------------------------------------------------------------->
    <div class="main_content_news">
        <div class="main_content_news_title">
            Latest News
        </div>
        <!-- /.main_content_news_title -->
        <ul class="main_content_news_content container">
            <?php
            $query = new WP_Query( array(  'posts_per_page' => 3) );
            while ($query->have_posts() ) : $query->the_post();
            ?>
            <li>
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
                        <p><?php echo the_excerpt() ; ?>
<!--                            <a href="#">Read More</a>-->
                        </p>
                    </div>
                    <!-- /.main_content_news_content_box_text -->
                    <div class="main_content_news_content_box_author"><?= get_field('news_author') ?></div>
                    <!-- /.main_content_news_content_box_author -->
                </div>

            </li>
            <?php endwhile;?>
        </ul>
        <div class="main_content_news_button container">
            <a class="btn btn-warning" href="<?php echo get_permalink(16 ); ?>" >View More News</a>
        </div>
        <!-- /.main_content_news_button -->
    </div>
    <!-- /.main_content_news container -->
</div>
<!-- /.main_content -->

<!----------------------------------------------Footer---------------------------------------------------------------->

<?php get_footer('main') ?>
