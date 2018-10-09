<?php get_header(); ?>
<!-- Content -->
<div class="contacts-center container">
    <div class="content">
        <br />
        <div class="h2" ><?php _e('Error 404','Storm-Theme'); ?></div>

        <div class="contact-content">

            <h1 class="errorh1"><?php _e('Error, Page not found','Storm-Theme'); ?></h1>
            <p class="errorh1"><?php _e('Sorry, but the page you\'re looking for has not found. Try checking the URL for errors, then hit the refresh<br /> button on your browser.','Storm-Theme'); ?></p>

        </div>


        <div class="line"></div>

        <div class="contact-footer">
            <p class="errorh1">
                <a href="<?php echo home_url();?>" class="gohomebut"><?php _e('Return to the homepage','Storm-Theme'); ?></a>
            </p>
        </div>

    </div>
</div>
<br /><br /><br /><br /><br />
<?php get_footer(); ?>
