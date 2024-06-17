<?php get_header(); ?>

<div class="container mt-5">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <article class="post-detail p-4 rounded">
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="post-thumbnail text-center mb-4">
                            <?php the_post_thumbnail('large', ['class' => 'img-fluid rounded']); ?>
                        </div>
                    <?php endif; ?>

                    <h1 class="display-4"><?php the_title(); ?></h1>
                    <div class="post-meta mb-4">
                        <span class="text-muted">Publié le : <?php echo get_the_date(); ?></span> |
                        <span class="text-muted">Catégorie : <?php the_category(', '); ?></span>
                    </div>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>

                    <div class="post-footer mt-4">
                        <?php the_tags('<span class="tags text-muted">Tags: ', ', ', '</span>'); ?>
                    </div>

                    <div class="post-navigation mt-4 d-flex justify-content-between">
                        <div class="prev-post">
                            <?php previous_post_link('%link', '&laquo; Article Précédent'); ?>
                        </div>
                        <div class="next-post">
                            <?php next_post_link('%link', 'Article Suivant &raquo;'); ?>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    <?php endwhile; else: ?>
        <p class="text-center text-white">Aucun article trouvé.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
