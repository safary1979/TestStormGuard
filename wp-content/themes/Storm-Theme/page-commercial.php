<?php
/*
 Template Name: Commercial
 */
?>
<?php  get_header() ?>

<div class="wwa_content" style="margin-top: 0px">
    <div class="wwa_content_nav container">
        <span>
            <?php function_exists('kama_breadcrumbs') && kama_breadcrumbs(' > '); ?>
        </span>
        <p>
            <?php  the_post(); ?>
            <?php  the_content(); ?>
            <?php  the_title(); ?>
        </p>
    </div>
</div>
<!----------------------------------------------Footer---------------------------------------------------------------->

<?php get_footer() ?>
