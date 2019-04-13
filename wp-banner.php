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
  position: fixed;
  bottom: 0;
  margin: 0;
  display: block;
  font-size: 1.5em;
}
#banner_15hack.moved {
  position: unset;
  bottom: unset;
}
#banner_15hack a {
  color: blue;
}
</style>
<script>
if (jQuery) {
  jQuery(document).ready(function(){
    var banner=jQuery("#banner_15hack");
    var body=jQuery("body");
    body.prepend(banner);
    banner.addClass("moved")
  })
}
</script>
  ';
}
function banner_div(){
	echo '
<div id="banner_15hack">
Necesitamos <a href="https://15hack.tomalaplaza.net/financiacion-2019/">donaciones</a>
para mantener los servicios<br/>
Estamos casi en <a href="https://15hack.tomalaplaza.net/bote/">números rojos</a>
</div>
  ';
}

add_action('wp_head', 'banner_css');
add_action('wp_footer', 'banner_div');
