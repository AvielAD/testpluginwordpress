<?php
    /*
        Plugin Name: Test para agregar un plugin
        Description: prueba de barra de navegacion
        Autor: Aviel
        Version: 1

    */
    add_shortcode("redes", "redes_sociales");

    function redes_sociales($atts){

        $args = shortcode_atts(array(

            'facebook' => 'https://www.facebook.com/',
            'twitter' => 'https://www.twitter.com/',
            'instagram' => 'https://www.instagram.com/'


        ),$atts);
        
        $uf = $args["facebook"];
        $ut = $args["twitter"];
        $ui = $args["instagram"];


        $facebook = "<a href='".$uf."'>Facebook</a>";
        $twitter = "<a href='".$ut."'>Twitter</a>";
        $instagram = "<a href='".$ui."'>Instagram</a>";

        $social = $facebook." ".$twitter." ".$instagram;

        return $social;
    }



?>