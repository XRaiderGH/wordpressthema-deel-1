<!DOCTYPE html>
<html lang="<?php language_attributes();?>">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="author" content="Rai Griffioen">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name');?></title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <?php wp_head();?>
</head>
<body lang="en">
<header class="header">
    <div class="navbar">
        <a class="navbarBrand" href="<?php echo home_url();?>"><h1><?php bloginfo('name');?></h1></a>
        <p style="margin-top: auto; margin-bottom: auto;"><?php bloginfo('description');?></p>
        <?php wp_nav_menu();?>
    </div>
    <div class="headerImage" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/tokyo-city-wide.png')">
    </div>
</header>

