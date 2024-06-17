<?php 
    $categories = get_categories();
?>


<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="title d-flex justify-content-center">
    <?php 
    if (is_category()){
        $category = get_queried_object();
        echo '<h1>' . $category->name . '</h1>';
    } else {
        echo '<h1>Cinema Theme</h1>';
    }
    ?>
    </div>

    <?php 
    if (is_home() || is_category()){ ?>
        <!-- navbar  -->
        <div class="my-4">
            <nav class="d-flex justify-content-around flex-wrap">
            <?php
                echo '<a href="' . esc_url(home_url()) . '" class="btn btn-secondary my-2 mx-2">Tous les films</a>';
                foreach ($categories as $category) {
                    echo '<a href="' . get_category_link($category->term_id) . '" class="btn btn-secondary my-2 mx-2">' . $category->name . '</a>';
                }
            ?>
            </nav>
        </div>
    <?php } ?>
</header>