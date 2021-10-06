<?php
/*
Plugin Name: Whatsup-plugin
Description: Let’s make your Web page visitors Contact you through “WhatsApp”, “WhatsUp” with a single Click (WhatsApp Chat, Group, Share)
WhatsApp connectivity for WordPress websites! Engage customers and generate leads!
Version: 0.0.1
Author: Nangebav
License: GPLv2 or later
Text Domain: akismet
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2005-2015 Automattic, Inc.
*/

function Activate (){
}

function Deactivate (){
    flush_rewrite_rules();
}


register_activation_hook(__FILE__, 'Activate');
register_deactivation_hook(__FILE__, 'Deactivate');


add_action('admin_menu', 'createMenu');

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