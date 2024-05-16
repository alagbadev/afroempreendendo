<?php
// Template Name: Início
get_header();
?>

<main>
    <!-- Banner Section -->
    <section id="banner">
        <div class="container">
            <div class="banner-content">
                <div class="content-left">
                    <h1>Conheça a Afroempreendendo</h1>
                    <p>Uma hub de educação empreendedora e inovação para pequenos empreendedores negros.</p>
                    <a href="#servicos"><button type="button" class="btn-topo">Saiba mais</button></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Painel de Serviços Section -->
    <div class="painel-de-servicos">
        <div id="servicos">
            <h2 style="color: white;">Descubra como podemos ajudar</h2>
            <p id="paragrafo">Conheça nossos serviços digitais para negócios sociais:</p>
            <div class="cards">
                <!-- Card 1 -->
                <div class="card">
                    <i class="fa-brands fa-react"></i>
                    <div class="conteudo">
                        <h3>Palestras</h3>
                        <p>
                            Fornecemos palestras de Afroempreendedorismo, Black Money, Diversidade e Inclusão, ESG para pequenos negócios, ODS e o Futuro da Humanidade, Comportamento Empreendedor, e Motivação Empreendedora.
                        </p>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="card">
                    <i class="fa-regular fa-gem"></i>
                    <div class="conteudo">
                        <h3>Cursos</h3>
                        <p>
                            Oferecemos capacitações em Marketing Digital, Modelagem de Negócios, Gestão Financeira, Iniciando no Empreendedorismo, Gestão de Pequenos Negócios, Produtividade, e Processos Empresariais.
                        </p>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="card">
                    <i class="fa-solid fa-rocket"></i>
                    <div class="conteudo">
                        <h3>Consultorias</h3>
                        <p>
                            A partir de um diagnóstico, identificamos a necessidade do cliente e realizamos a consultoria em qualquer área de negócio.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sobre Nós Section -->
    <div id="sobre">
        <div class="sessao-sobre">
            <div class="sobre-container">
                <h1>Sobre Nós</h1>
                <p class="sessao-text">
                    Afroempreendendo, criado em 2016, é uma hub de educação empreendedora e inovação para pequenos empreendedores negros que precisam melhorar seus processos de gestão e desenvolver suas habilidades empreendedoras por meio de treinamentos, consultorias e redes de contato.
                </p>
                <div class="habilidades">
                    <span>Palestras</span>
                    <span>Cursos</span>
                    <span>Consultorias</span>
                </div>
            </div>
        </div>
    </div>

<!-- Blog Section -->
<section id="blog">
    <div class="blog-heading">
        <span>Últimos Artigos</span>
        <h3>Nosso Blog:</h3>
    </div>

    <!-- Consulta personalizada para pegar as três últimas postagens -->
    <?php
    $args = array(
        'posts_per_page' => 3, // Pegue apenas as últimas 3 postagens
        'post_type' => 'post', // Certifique-se de que está buscando postagens
        'post_status' => 'publish', // Apenas postagens publicadas
        'orderby' => 'date', // Ordena por data de publicação
        'order' => 'DESC', // Em ordem decrescente (mais recentes primeiro)
    );
    $blog_query = new WP_Query($args);
    ?>

    <!-- Loop para exibir as últimas três postagens -->
    <?php if ($blog_query->have_posts()) : ?>
    <div class="blog-container">
        <?php while ($blog_query->have_posts()) : $blog_query->the_post(); ?>
            <div class="blog-box">
                <div class="blog-img">
                    <!-- Verifica se a postagem tem uma imagem destacada -->
                    <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('medium', ['alt' => get_the_title()]); ?>
                    <?php else : ?>
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/afroempreendendo_marca_finalcortado.png" 
                             alt="Imagem do Blog">
                    <?php endif; ?>
                </div>

                <div class="blog-text">
                    <!-- Data e categorias -->
                    <span><?php echo get_the_date('F Y'); ?> / <?php echo get_the_category_list(', '); ?></span>
                    <!-- Título da postagem -->
                    <a href="<?php the_permalink(); ?>" class="blog-title"><?php the_title(); ?></a>
                    <!-- Trecho da postagem -->
                    <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
                    <!-- Link para a postagem completa -->
                    <a href="<?php the_permalink(); ?>">Saber Mais</a>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
    <?php endif; ?>

    <!-- Sempre redefina a consulta principal após usar WP_Query -->
    <?php wp_reset_postdata(); ?>
</section>



    <!-- Contato Section -->
    <div id="contato">
        <section id="form">
            <div class="contact-container">
                <div class="contact-left">
                    <h2>Envie um Email</h2>
                    <hr>
                    <form action="https://api.web3forms.com/submit" method="POST">
                        <input type="hidden" name="access_key" value="f2993d81-d8b5-4a40-a72c-8bbd736201a7">
                        <input type="text" name="nome" placeholder="Seu Nome" class="contact-inputs" required>
                        <input type="email" name="email" placeholder="Seu Email" class="contact-inputs" required>
                        <textarea name="mensagem" placeholder="Sua Mensagem" class="contact-inputs" required></textarea>
                        <button type="submit" class="custom-button">Enviar<i class="fa-regular fa-paper-plane"></i></button>
                    </form>
                </div>
                <div class="contact-right">
                    <h2>Ou agende uma reunião</h2>
                    <hr>
                    <a href="https://calendly.com/fatyferreira">
                        <button class="custom-button">Agendar<i class="fa-regular fa-calendar-days"></i></button>
                    </a>
                </div>
            </div>
        </section>
    </div>

</main>

<?php get_footer(); ?>
