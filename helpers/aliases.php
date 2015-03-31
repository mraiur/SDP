<?php
if( !function_exists('metaValue') ){
    function metaValue($key){
        return configValue('meta-'.$key);
    }
}

if( !function_exists('myDescription') ){
    function myDescription(){
        return configValue('description');
    }
}

if( !function_exists('myShortDescription') ){
    function myShortDescription(){
        return configValue('short-description');
    }
}

if( !function_exists('github') ){
    function github(){
        return configValue('github');
    }
}


if( !function_exists('bitbucket') ){
    function bitbucket(){
        return configValue('bitbucket');
    }
}



if( !function_exists('myName')) {
    function myName(){
        return configValue('name');
    }
}

if( !function_exists('twitter') ){
    function twitter(){
        return configValue('twitter');
    }
}

if( !function_exists('facebook') ){
    function facebook(){
        return configValue('facebook');
    }
}

if( !function_exists('googlePlus') ){
    function googlePlus(){
        return configValue('google-plus');
    }
}

if( !function_exists('linkedin') ){
    function linkedin(){
        return configValue('linkedin');
    }
}

if( !function_exists('blog') ){
    function blog(){
        return configValue('blog');
    }
}
