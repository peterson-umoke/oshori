<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


if(!function_exists("show_maintenance")) {
    function show_maintenance() {
        $file = APPPATH.'views/maintenance/_content.php';
        if(file_exists($file)) {
            require_once APPPATH.'views/maintenance/header.php';
            require_once $file;
            require_once APPPATH.'views/maintenance/footer.php';
            exit;
        }
    }
}