<?php get_header(); ?>
<main>
    <!-- wallpaper -->
    <?php 
        if (is_front_page()) {
            echo '<img src="' .  get_template_directory_uri() . '/images/home-wallpaper.jpg" width="100%" height="" alt="" />';
        } elseif (is_category()) {
            $category = get_queried_object();
            $slug = $category->slug;
            echo '<img src="' .  get_template_directory_uri() . '/images/' . $slug .  '-wallpaper.jpg" width="100%" height="" alt="" />';
        }
    ?>

    
    <!-- movie list -->
    <div class="container mt-4">
        <?php
            while ( have_posts() ) : the_post();?>
                <div class="post">
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <?php the_content() ?>
                </div>
                <?php
            endwhile;
        ?>
    </div>
</main>
<?php get_footer(); ?>
