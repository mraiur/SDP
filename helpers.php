<?php
if( !function_exists('assetDataFile') ){
    function assetDataFile($file){
        if( file_exists( './information/'.$file.'.php') ){
            ob_start();
            require './information/'.$file.'.php';
            $content = ob_get_contents();
            ob_end_clean();
            return $content;
        }
        return '';
    }
}
if( !function_exists('configValue') ){
    function configValue($key){
        $config = require 'config.php';
        if( isset( $config[$key]) ){
            return $config[$key];
        }
        return null;
    }
}

if( !function_exists('profilePic') ){
    function profilePic(){
        if(file_exists('information/profile.png')) {
            return 'information/profile.png';
        }
        return "http://placehold.it/400x400";
    }
}

