<?php get_header(); ?>

<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <!-- Conteúdo do Post -->
            <article>
                <h2><?php the_title(); ?></h2>  <!-- Título do Post -->
                <div>
                    <?php the_content(); ?>  <!-- Conteúdo do Post -->
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <!-- Caso não haja posts -->
        <p>Desculpe, nenhum conteúdo encontrado.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
