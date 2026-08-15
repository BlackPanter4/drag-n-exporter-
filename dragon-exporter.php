<?php
/**
 * Plugin Name: Dragon Exporter
 * Description: Exporta datos con arrastre estilo Drag-n-Drop - Hecho desde Luchanas
 * Version: 1.0
 * Author: BlackPanter4
 */

if (!defined('ABSPATH')) exit;

add_action('admin_menu', function(){
    add_menu_page('Dragon Exporter', '🐉 Dragon', 'manage_options', 'dragon-exporter', 'dragon_page', 'dashicons-move', 80);
});

function dragon_page(){
    echo '<div class="wrap"><h1>🐉 Dragon Exporter v1.0</h1>';
    echo '<p>Arrastra para exportar. Plugin creado por <b>BlackPanter4</b> desde Coahuila.</p>';
    echo '<div style="border:2px dashed #000; padding:40px; text-align:center; background:#f9f9f9;">';
    echo '<h2>🎯 Módulo Drag-n-Drop listo</h2>';
    echo '<button class="button button-primary">Exportar CSV</button>';
    echo '</div></div>';
}<?php
/**
 