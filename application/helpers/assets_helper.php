<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

// assets_uri
if(!function_exists("assets_uri")) {
    function assets_uri($args = "") {
        return site_url("/assets".$args);
    }
}

// css uri
if(!function_exists("css_uri")) {
    function css_uri($args = "") {
        return assets_uri("/css/".$args.".css");
    }
}

// js uri
if(!function_exists("js_uri")) {
    function js_uri($args = "") {
        return assets_uri("/js/".$args.".js");
    }
}

// plugins uri
if(!function_exists("plugins_uri")) {
    function plugins_uri($args = "") {
        return assets_uri("/plugins/".$args);
    }
}

//static_image
if(!function_exists("images_uri")) {
    function images_uri($args = "") {
        return site_url("assets/img/$args");
    }
}