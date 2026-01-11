<?php
// Cargar hoja de estilos principal del tema
function ia_blog_styles() {
    wp_enqueue_style(
        'ia-blog-style',
        get_stylesheet_uri(),
        [],
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'ia_blog_styles');


