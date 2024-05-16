<?php
/**
 * O modelo para exibir postagens individuais.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage SeuTema
 * @since SeuTema 1.0
 */

get_header(); ?>

<main id="main" class="site-main">

    <?php
    while (have_posts()) :
        the_post();

        // Inclui o template da postagem individual.
        get_template_part('template-parts/content', 'single');

        // Se os comentários estiverem abertos ou se houver pelo menos um comentário, carrega o modelo de comentários.
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;

    endwhile; // End of the loop.
    ?>

</main><!-- #main -->

<?php
get_footer();
