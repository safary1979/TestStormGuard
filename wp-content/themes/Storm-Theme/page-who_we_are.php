<?php
/*
 Template Name: Who We Are
 */
?>
<?php  get_header() ?>

<!-------------------------------------------------------Main background------------------------------------------------------->
<div class="wwa_background">

</div>
<!-- /.wwakground -->
<!-------------------------------------------------------Main content------------------------------------------------------->
<div class="main_content">
    <div class="breadcrumbs container">
        <span>
            <?php function_exists('kama_breadcrumbs') && kama_breadcrumbs(' > '); ?>
        </span>
    </div>
    <!----------------------------------------------Who We Are--------------------------------------------------------->
    <div class="wwa_content container">
        <div class="wwa_content_left">
            <img src="<?php echo get_template_directory_uri();?>/assets/img/wwa/who-we-are.png" alt="">
        </div>
        <!-- /.wwa_content_wwa_left -->
        <div class="wwa_content_right">
            <h4>Who We Are</h4>
            <p>Storm Guard Restoration is a trusted name in the insurance restoration industry. For over a decade,
                Storm Guard has specialized in exterior insurance restoration for roofing, siding, windows, gutters,
                and emergency tarping services.</p>
            <p>The Storm Guard “Way” is the spirit running through the core of our entire organization. Our team of
                professionals strives to provide our clients with the utmost in quality construction and insurance
                expertise. As a trusted advocate, we will always strive to help ease our clients’ burden with the
                utmost in quality insurance and construction expertise.</p>
        </div>
        <!-- /.wwa_content_wwa_right -->
    </div>
    <!-- /.wwa_content_wwa container -->

    <!----------------------------------------------Ready--------------------------------------------------------------->
    <div class=" container main_content_ready wwa_ready_padding_sm">
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
            <!--</div>-->
            <!-- /.row align-items-center -->
        </div>
        <!-- /.container container -->
    </div>
    <!-- /.main_content_search -->
</div>
<!-- /.main_content -->


<?php get_footer() ?>
