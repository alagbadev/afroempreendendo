<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-wrapper"> <!-- Wrapper para o conteúdo da postagem -->
        <header class="entry-header">
            <nav>
                <a class="logo" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/marca-apenas-africa-afroempreendendo.png" alt="Logo Afroempreendendo">Afroempreendendo
                </a>
                <div class="mobile-menu">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
                <ul class="nav-list">
                    <li><a href="/">Início</a></li>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contato">Contato</a></li>
                </ul>
            </nav>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            the_content();

            wp_link_pages(array(
                'before' => '<div class="page-links">' . __('Pages:', 'seu-tema'),
                'after'  => '</div>',
            ));
            ?>
        </div><!-- .entry-content -->
    </div> <!-- Fim do wrapper -->
</article><!-- #post-<?php the_ID(); ?> -->

