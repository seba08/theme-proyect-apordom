<!DOCTYPE html>
<html lang="en">
<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?></title>

    <?php wp_head(); ?>
</head>
<body>
    <header class="header" id="header">
        <?php get_template_part('template-parts/header/header-logo'); ?>
        <?php get_template_part('template-parts/header/header-form'); ?>
    </header>
    <!-- Inicio main -->
    <main class="main" id="main">
    