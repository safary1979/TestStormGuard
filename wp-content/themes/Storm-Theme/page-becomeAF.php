<?php
/*
 Template Name: BecomeAF
 */
?>
<?php  get_header() ?>

<!-------------------------------------------------------Main background------------------------------------------------------->
<div class="become_background"></div>
<!-- /.main_background -->
<!-------------------------------------------------------Main content------------------------------------------------------->
<div class="main_content">
    <div class="breadcrumbs container">
        <span>
<!--            <div class="breadcrumb-wrap">-->
<!--                <nav aria-label="breadcrumb">-->
<!--                    --><?php //get_breadcrumb(); ?>
<!--                </nav>-->
<!--            </div>-->
            <?php function_exists('kama_breadcrumbs') && kama_breadcrumbs(' > '); ?>
        </span>
    </div>
    <!----------------------------------------------Become--------------------------------------------------------->
    <div class="become container">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/become/become.png" alt="">
        <div class="become_one">
            <h4>Own a Storm Guard Franchise!</h4>
            <p>The insurance industry estimates that roofing, siding, windows, and gutter claims, due to hail and wind
                damage, exceeds billions of dollars each year. Storms and exterior property damage happen all across the
                country, and throughout the year. And yet, the insurance restoration industry is very fragmented, with
                no major players. The businesses tend to be small and localized, and business practices vary widely
                because individual owners use individual methods.</p>
        </div>
        <div class="become_two">
            <h4>Who We Are</h4>
            <p>Storm Guard Restoration is the fastest-growing exterior restoration franchise offering. We are a young,
                dynamic company on its way to dominating the exterior insurance and non-insurance restoration industry.
                By joining the Storm Guard system, you can capitalize on being a part of the first nationally-recognized
                franchise system for exterior insurance restoration. Our highly-experienced trainers and field staff
                will train you to operate all aspects of the business, from the sales and claims process to the actual
                building of the roofing, siding, windows, and gutter projects.</p>
        </div>
        <div class="become_three"> <h4>Why Consider a Storm Guard Franchise</h4>
            <p>This is a very attractive business model that offers a low investment, fast ramp-up, small number of
                staff, fragmented competition, and a high potential return on investment.</p></div>
        <div class="become_four">
            <h4>Looking for the Right Candidates</h4>
            <p>We are looking for motivated individuals who are prepared to take their financial future into their own
                hands and create successful franchises; people who have the ability to set goals and strive to achieve
                them; people who are able to learn and execute a precise business plan; people that can lead and
                motivate employees to achieve short and long term goals. To be a successful Storm Guard Restoration
                Franchisee, you must be ready to invest in yourself.</p>
            <p>Storm Guard Restoration franchisees come from all walks of life. Typically, they are not contractors,
                restoration experts, or home improvement gurus. Our franchisees are smart, successful and highly
                motivated business leaders. They have a disciplined acumen for maximizing opportunity and they know
                how to run a business. They are committed to building productive teams and long-term relationships.
                They know how to inspire and how to bring out the best in other people.</p>
            <p>As a Storm Guard Restoration franchisee, your business is guided by a powerful business model. You
                will utilize Sales Associates to guide your customers through the restoration process, giving them
                confidence that the job will get done on time with the highest level of service. You will leverage a
                network of highly skilled subcontractors overseen by a production manager to deliver a smooth
                restoration experience.</p>
        </div>
        <div class="become_five">
            <h4>Next Steps</h4>
            <p>To start, please call Rita Perkins at <a href="">(919) 977-9517</a>, or <a href="">submit this form</a> and we’ll contact you.
                Once you’ve been qualified, we’ll schedule time for an overview presentation and discussion with you,
                and provide our Franchise Disclosure Document for your review. You’ll be given plenty of time and
                opportunity to perform your due diligence. When you make your final decision to purchase a Storm Guard
                Restoration franchise, we’ll send you our Franchise Agreement.</p>
            <p>Storm Guard offers many great territories for our franchisees – and territories are going fast!</p>
        </div>
    </div>
    <!----------------------------------------------Search--------------------------------------------------------->
    <div class="wrapper_search_become">
        <div class="become_search container">
            <div class="become_search_left">
                <h3>Become A Franchise Owner Today!</h3>
                <h6>Ready to become a franchise owner? Fill out the form to get started.</h6>
            </div>
            <!-- /.main_content_search_left -->
            <div class="become_search_right ">
                <div class="become_search_right_button ">
                    <a class="btn btn-warning" href="#" >Fill Out Our Form</a>
                </div>
            </div>
            <!-- /.main_content_search_right -->
        </div>
        <!-- /.main_content_search -->
    </div>
</div>
<!-- /.main_content -->
<!----------------------------------------------Footer---------------------------------------------------------------->

<?php get_footer() ?>
