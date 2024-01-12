<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php
    if (!defined('ABSPATH')) {
        exit; // Exit if accessed directly.
    }

    get_header();
    ?>

    <?php if (astra_page_layout() == 'left-sidebar') : ?>
        <?php get_sidebar(); ?>
    <?php endif; ?>

    <div id="primary" <?php astra_primary_class(); ?>>
        <?php
        astra_primary_content_top();

        astra_content_loop();

        astra_pagination();

        astra_primary_content_bottom();
        ?>
    </div><!-- #primary -->

    <?php if (astra_page_layout() == 'right-sidebar') : ?>
        <?php get_sidebar(); ?>
    <?php endif; ?>

    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
        <input type="hidden" name="action" value="custom_form_action">
        <input type="text" id="quantity-input" name="quantity" value="0">
        <button type="submit">Submit</button>
    </form>

    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>
</html>
