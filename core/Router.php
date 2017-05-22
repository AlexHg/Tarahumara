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

    Flight::route('/quienes', function(){
        View::render('template/ini', 
            array(
                'title' => "Quienes la integran",
                "description" => "Otro sitio web de Welfare"
            )
        );
        View::render('quienes');
        View::render('template/fin');
    });

    Flight::route('/reconocimiento', function(){
        View::render('template/ini', 
            array(
                'title' => "Reconocimientos",
                "description" => "Otro sitio web de Welfare"
            )
        );
        View::render('reconocimiento');
        View::render('template/fin');
    });

    Flight::route('/educacion', function(){
        View::render('template/ini', 
            array(
                'title' => "Programa para la Educación",
                "description" => "Otro sitio web de Welfare"
            )
        );
        View::render('educacion');
        View::render('template/fin');
    });

    Flight::route('/nutricion', function(){
        View::render('template/ini', 
            array(
                'title' => "Programa para la Nutrición Infantil",
                "description" => "Otro sitio web de Welfare"
            )
        );
        View::render('nutricion');
        View::render('template/fin');
    });

    Flight::route('/hidrica', function(){
        View::render('template/ini', 
            array(
                'title' => "Programa para la Seguridad Hídrica",
                "description" => "Otro sitio web de Welfare"
            )
        );
        View::render('hidrica');
        View::render('template/fin');
    });

    Flight::route('/alimentaria', function(){
        View::render('template/ini', 
            array(
                'title' => "Programa para la Seguridad Alimentaria",
                "description" => "Otro sitio web de Welfare"
            )
        );
        View::render('alimentaria');
        View::render('template/fin');
    });

    Flight::route('/lasierra', function(){
        View::render('template/ini', 
            array(
                'title' => "La Sierra Tarahumara",
                "description" => "Otro sitio web de Welfare"
            )
        );
        View::render('lasierra');
        View::render('template/fin');
    });







