<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uranincblog
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>uran inc.</title>
	<?php wp_head(); ?>
</head>

<body<?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php global $uranincblog_option;
?>
<div class="main">
    <header class="header">
        <div class="container">

            <?php if($uranincblog_option['title']){?>
                    <a href="/">
                <h2><?php echo $uranincblog_option['title']?></h2>
                    </a>
            <?php } ?>
        </div>
    </header>

    <?php if($uranincblog_option['abouttext']){?>
        <div class="aboutContainer">
            <h3 class="aboutText"><?php echo esc_html__($uranincblog_option['abouttext'], 'uranincblog')?></h3>
        </div>
    <?php }?>
