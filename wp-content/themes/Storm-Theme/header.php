<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="favicon.ico">
        <title>StormGuard</title>
        <?php wp_head(); ?>

    </head>
    <body>
    <!-------------------------------------------------------------------Header-------------------------------------------------------->
        <header class="header ">
            <div class=" header_top container">
                <div class="header_top_left">
                    <a href="#"  >Find Your Local Storm Guard!</a>
                </div>
                <!-- /.header_top_left -->
                <!-- .header_top_right -->
                <nav class="header_top_menu">
                    <?php  wp_nav_menu(array(
                        'menu'            =>    'Header Top Menu',
                        'menu_class'      =>    'header_top_menu_ul',
                        'container'       =>    'false',
                        'items_wrap'      =>    '<ul id="%1$s" class="%2$s">%3$s</ul> ' ,
                        'depth'           =>    0
                    ));?>
                </nav>
                <!-- /.header_top_menu -->
            </div>
            <!-- /.container-fluid header_top -->
            <div class="header_bottom">
                <div class="header_bottom_wrapper container">
                    <div class="header_bottom_wrapper_logo">
                        <?php the_custom_logo() ?>
                    </div>
                    <!-- /.header_bottom_logo -->
                    <nav class=" header_bottom_wrapper_right">
                        <button class="header_bottom_wrapper_right_btn">
                            <i class="icon-menu"></i>
                        </button>
                        <?php  wp_nav_menu(array(
                            'menu'            => 'Header Bottom Menu',
                            'menu_class'      => 'header_bottom_wrapper_right_ul',
                            'container'       =>    'false',
                            'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul> ' ,
                            'depth'           => 0
                        ));?>
                    </nav>
                        <!-- / .header_bottom_wrapper_right-->
                </div>
                <!-- /.header_bottom_wrapper container -->
            </div>
            <!-- /.header_bottom -->
        </header>
        <!-- /.header -->