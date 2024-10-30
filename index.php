<?php
/*
Plugin Name: Magic Food
Plugin URI: http://oleksandrustymenko.net.ua
Description:This is a simple game where you have a short time to remove each item of food. Simply enter the [magicfood] shortcode in a post or page.
Version: 5.1
Author: Oleksandr Ustymenko
Author URI: http://oleksandrustymenko.net.ua
*/

/*  
	Copyright 2020 oleksandr87 (email:ustymenkooleksandrnew@gmail.com)

   This program is free software; you can redistribute it and/or modify
   it under the terms of the GNU General Public License as published by
   the Free Software Foundation; either version 2 of the License, or
   (at your option) any later version.

   This program is distributed in the hope that it will be useful,
   but WITHOUT ANY WARRANTY; without even the implied warranty of
   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
   GNU General Public License for more details.

   You should have received a copy of the GNU General Public License
   along with this program; if not, write to the Free Software
   Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function oumagicfood_file()
{
    wp_enqueue_style( 'mf-google-fonts', 'https://fonts.googleapis.com/css?family=Acme', false ); 
    
    wp_enqueue_script( 'jquery');
    wp_localize_script( 'jquery', 'oumfajaxcode', 
	array(
   'oumfajax_url'   => admin_url('admin-ajax.php'),
   'oumfajax_nonce' => wp_create_nonce('oufncreatenonce')
	));
    
}

add_action('wp_enqueue_scripts', 'oumagicfood_file');


function oumagicfood_function()
{        
    require_once( plugin_dir_path(__FILE__).'magicfood_pc.php');  
}

add_shortcode('magicfood', 'oumagicfood_function');
?>