<?php
if( !function_exists('assetDataFile') ){
    function assetDataFile($file){
        if( file_exists( './information/'.$file.'.php') ){
            return require_once './information/'.$file.'.php';
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

