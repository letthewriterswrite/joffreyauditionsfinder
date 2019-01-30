<?php

//exit if file is called directly
if ( !defined('ABSPATH')){
    exit;
    
}

//Not used because for the moment, it's better to enqueue at the top of the Form in joffreyauditionsfinder.php
function joffreyauditionsfinder_enqueue_style_public()
{
    /* wp_enqueue_style(
     $handle,
     $src,
     $deps,
     $ver,
     $media)
      */
    
    $src = plugin_dir_url(__FILE__) . 'public/css/joffrey-public.css';
    
    //wp_enqueue_style('joffrey-public-style',$src,array('twentyseventeen-style'),null,'all');
    
    /*
    $data = '        .tab {
            display: none;
        }
        
        .joffrey-sidenav {
            height: 100%;
            width: 15%;
            position: fixed;
            z-index: 999;
            padding: 10%;
            background-color: aqua;
            text-align: center;
            opacity: .5;
            transition:opacity 1s ease 1s, width 2s ease 1s;
            

        }
        
        .joffrey-sidenav:hover {
            opacity: 1;
            width: 40%;
            transition:opacity 1s ease,width 2s ease; 
        }
        
        .joffrey-sidenav:hover .transparent {
            opacity: 1;
            transition: opacity 2s ease;
        }
        .transparent {
            opacity: 0;
            transition: opacity 1s ease 1s;
        }
        
        h1 {
            opacity: 1;
        }';
    wp_add_inline_style('joffrey-public-style', $data);*/
    
    //wp_enqueue_style('joffrey-bootstrap-css','https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css',array(),null,'all');
     
}

//add_action('wp_enqueue_scripts','joffreyauditionsfinder_enqueue_style_public');

//Not used because for the moment, it's better to enqueue at the top of the Form in joffreyauditionsfinder.php
function joffreyauditionsfinder_enqueue_script_public()
{
    /*
    wp_enqueue_script(
            $handle,
            $src,
            $deps,
            $ver,
            $in_footer
            )
     */
    $src = plugin_dir_url(__FILE__).'public/js/form-process.js';

    //Load Google API
    wp_enqueue_script('joffrey-google-maps', 'https://maps.googleapis.com/maps/api/js?AIzaSyBL6m9eg2-SYkWx_MkYHp04ArTukvcx32E',array(),null,true);
    
    //load bootstrap
    /*
    wp_enqueue_script('joffrey-jquery','https://code.jquery.com/jquery-3.3.1.min.js', array(),null,true);
    wp_enqueue_script('joffrey-popper','https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',array(),null,true);
    wp_enqueue_script('joffrey-bootstrap-js','https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',array(),null,true);*/
    
    //Load custom JS
    wp_enqueue_script('joffrey-public-js', $src, array(), null, true);
    
}

//add_action('wp_enqueue_scripts','joffreyauditionsfinder_enqueue_script_public');


/*
function joffreyauditionsfinder_boostrap_meta ()
{
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale= 1, shrink-to-fit=no">
    
    <?php
}

add_action('wp_head','joffreyauditionsfinder_boostrap_meta');*/