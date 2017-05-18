<?php

    Flight::route('/', function(){
        View::render('template/ini', 
            array(
                'title' => "Inicio",
                "description" => "Otro sitio web de Welfare"
            )
        );
        View::render('home');
        View::render('template/fin');
    });

    Flight::route('/inicio', function(){
        Flight::redirect('/');
    });  

    Flight::route('/mision', function(){
        View::render('template/ini', 
            array(
                'title' => "Misión, Visión y Valores",
                "description" => "Otro sitio web de Welfare"
            )
        );
        View::render('mision');
        View::render('template/fin');
    });

    Flight::route('/origenes', function(){
        View::render('template/ini', 
            array(
                'title' => "Origen",
                "description" => "Otro sitio web de Welfare"
            )
        );
        View::render('origen');
        View::render('template/fin');
    });







