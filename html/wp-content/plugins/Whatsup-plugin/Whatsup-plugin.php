<?php
/*
Plugin Name: Whatsup-plugin
Description: ¡Hagamos que los visitantes de su página web se comuniquen con usted a través de WhatsApp web o móvil, "WhatsUp" con un solo clic de conectividad de WhatsApp para sitios web de WordPress!
Version: 0.0.1
Author: Nangebav
License: GPLv2 or later
Text Domain: akismet
*/


function Activate (){
    // Esta variable global permite acceder a todas las funciones de la base de datos de WP
    global $wpdb; 
    // Creará tabla sólo si no existe
    $charset_collate = $wpdb->get_charset_collate();
    $table_name = $wpdb->prefix.'table_form_Whatsup';

    $sql = "CREATE TABLE IF NOT EXISTS $table_name( 
        `TableId` INT NOT NULL , 
        `telephone` VARCHAR(15) NOT NULL , 
        `messages` VARCHAR(400) NOT NULL , 
        UNIQUE (`TableId`)) 
        $charset_collate;
        ENGINE = InnoDB;
    ";
    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
   
}

function Deactivate (){
    flush_rewrite_rules();
}


register_activation_hook(__FILE__, 'Activate');
register_deactivation_hook(__FILE__, 'Deactivate');

// Creación del menú de configuración
function createMenu (){
 add_menu_page(
    'WhatsUp!',//Titulo de la pagina
    'WhatsUp! Menu',// Titulo del menu
    'manage_options', // Capability
    plugin_dir_path(__FILE__) . 'admin/Homepage.php',//slug
    null , //function del contenido
     plugin_dir_url(__FILE__).'admin/img/icon.png',//icono
     '1' //priority
 );
}
add_action('admin_menu', 'createMenu');

// Registro de estilos de administración personalizados

// Registro de estilos de chat personalizados

// Habilitar Jquery predeterminado

// Iniciamos carga de script que habilita el chat