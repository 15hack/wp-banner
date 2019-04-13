<?php
/*
* Plugin Name: Banner 15hack
* Description: Crea una banner para todos los blogs
* Version: 1.0
* Author: 15hack
* Author URI: https://github.com/15hack/wp-banner
* License: GPL3
*/

function banner_css(){
	echo '
<style>
#banner_15hack {
  background-color: red;
  color: black;
  padding: 20px;
  text-align: center;
  font-weight: bold;
}
</style>
  ';
}
function banner_div(){
	echo '
<div id="banner_15hack">
Necesitamos <a href="https://15hack.tomalaplaza.net/financiacion-2019/">donaciones</a>
para mantener los servicios.
</div>
  ';
}

add_action('wp_head', 'banner_css');
add_action('wp_footer', 'banner_div');
