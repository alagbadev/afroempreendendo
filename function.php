<?php
/**
 * Enfileirar o CSS do tema
 */
function afroempreendendo_enqueue_styles() {
    // Caminho para o arquivo CSS no diretório do tema
    $css_path = get_template_directory_uri() . '/style.css';
    
    // Registra o estilo com uma versão para evitar problemas de cache
    wp_register_style('afroempreendendo-style', $css_path, [], '1.0.0', 'all');

    // Enfileira o estilo para ser carregado no site
    wp_enqueue_style('afroempreendendo-style');
}

// Hook para enfileirar estilos no WordPress
add_action('wp_enqueue_scripts', 'afroempreendendo_enqueue_styles');

// Carregar scripts no WordPress
function afroempreendendo_enqueue_scripts() {
    // Caminho para o arquivo JavaScript
    $script_path = get_template_directory_uri() . '/script.js';
    
    // Registra o script para garantir que ele pode ser enfileirado
    wp_register_script('afroempreendendo-script', $script_path, [], '1.0.0', true);

    // Enfileira o script para ser carregado na página
    wp_enqueue_script('afroempreendendo-script');
}

// Adiciona o código ao hook 'wp_enqueue_scripts'
add_action('wp_enqueue_scripts', 'afroempreendendo_enqueue_scripts');

function enqueue_google_fonts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap', [], null);
    wp_enqueue_style('google-fonts-inter', 'https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600&display=swap', [], null);
}

add_action('wp_enqueue_scripts', 'enqueue_google_fonts');
