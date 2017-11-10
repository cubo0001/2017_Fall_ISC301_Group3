<?php
/*
 * The Header for our theme.
 */
?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <!--[if IE 8]>
    <link href="<?php echo esc_url(get_template_directory_uri());?>/css/ie8.css" rel="stylesheet" type="text/css">
    <![endif]-->

    <!--[if  IE 9]>
    <link media="all" rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri());?>/css/ie9.css">
    <![endif]-->

    <?php wp_head(); ?>
<!--    <div class="fb-details">-->
<!--        <iframe src="//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/jlan.test/height=250;colorscheme=light;show_faces=true;border_color;stream=false;header=false" scrolling="no" frameborder="0" style="width:100% ; overflow:hidden;height:250px; background:#fff"></iframe>-->
<!--    </div>-->
    <meta name="google-site-verification" content="Dh98B0f8p5zYMdqCyy0YF4ol5h_i1yIdv7I50nt2bQc" />
</head>
<body id="bd" <?php body_class(); ?>>
<?php $homepage_url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
      if($homepage_url === 'http://winestore1977.com/') {

?>
    <div class="row-under-slide"></div>
<?php } ?>