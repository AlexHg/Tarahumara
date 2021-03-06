<?php

    Flight::route('/', function(){
        View::render('template/ini', 
            array(
                'title' => "Inicio",
                "description" => "Otra creación de Welfare"
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
                "description" => "Otra creación de Welfare"
            )
        );
        View::render('mision');
        View::render('template/fin');
    });

    Flight::route('/origenes', function(){
        View::render('template/ini', 
            array(
                'title' => "Origen",
                "description" => "Otra creación de Welfare"
            )
        );
        View::render('origen');
        View::render('template/fin');
    });

    Flight::route('/quienes', function(){
        View::render('template/ini', 
            array(
                'title' => "Quienes la integran",
                "description" => "Otra creación de Welfare"
            )
        );
        View::render('quienes');
        View::render('template/fin');
    });

    Flight::route('/reconocimiento', function(){
        View::render('template/ini', 
            array(
                'title' => "Reconocimientos",
                "description" => "Otra creación de Welfare"
            )
        );
        View::render('reconocimiento');
        View::render('template/fin');
    });

    Flight::route('/educacion', function(){
        View::render('template/ini', 
            array(
                'title' => "Programa para la Educación",
                "description" => "Otra creación de Welfare"
            )
        );
        View::render('educacion');
        View::render('template/fin');
    });

    Flight::route('/nutricion', function(){
        View::render('template/ini', 
            array(
                'title' => "Programa para la Nutrición Infantil",
                "description" => "Otra creación de Welfare"
            )
        );
        View::render('nutricion');
        View::render('template/fin');
    });

    Flight::route('/hidrica', function(){
        View::render('template/ini', 
            array(
                'title' => "Programa para la Seguridad Hídrica",
                "description" => "Otra creación de Welfare"
            )
        );
        View::render('hidrica');
        View::render('template/fin');
    });

    Flight::route('/alimentaria', function(){
        View::render('template/ini', 
            array(
                'title' => "Programa para la Seguridad Alimentaria",
                "description" => "Otra creación de Welfare"
            )
        );
        View::render('alimentaria');
        View::render('template/fin');
    });

    Flight::route('/lasierra', function(){
        View::render('template/ini', 
            array(
                'title' => "La Sierra Tarahumara",
                "description" => "Otra creación de Welfare"
            )
        );
        View::render('lasierra');
        View::render('template/fin');
    });

    Flight::route('/boletines', function(){
        View::render('template/ini', 
            array(
                'title' => "Boletines",
                "description" => "Otra creación de Welfare"
            )
        );
        View::render('boletines');
        View::render('template/fin');
    });

    Flight::route('/informes', function(){
        View::render('template/ini', 
            array(
                'title' => "Informes",
                "description" => "Otra creación de Welfare"
            )
        );
        View::render('informes');
        View::render('template/fin');
    });

    Flight::route('/aviso-de-privacidad', function(){
        View::render('template/ini', 
            array(
                'title' => "Aviso de privacidad",
                "description" => "Otra creación de Welfare"
            )
        );
        View::render('avisoprivacidad');
        View::render('template/fin');
    });

    Flight::route('/estados-financieros', function(){
        View::render('template/ini', 
            array(
                'title' => "Estados Financieros",
                "description" => "Otra creación de Welfare"
            )
        );
        View::render('estados-financieros');
        View::render('template/fin');
    });

    Flight::route('/korima', function(){
        View::render('template/ini', 
            array(
                'title' => "Haz Korima",
                "description" => "Otra creación de Welfare"
            )
        );
        View::render('korima');
        View::render('template/fin');
    });

    Flight::route('/alianzas', function(){
        View::render('template/ini', 
            array(
                'title' => "Donantes & Alianzas",
                "description" => "Otra creación de Welfare"
            )
        );
        View::render('alianzas');
        View::render('template/fin');
    });

    Flight::route('/colabora', function(){
        View::render('template/ini', 
            array(
                'title' => "Colabora con nosotros",
                "description" => "Otra creación de Welfare"
            )
        );
        View::render('colabora');
        View::render('template/fin');
    });

    Flight::route('/contacto', function(){
        View::render('template/ini', 
            array(
                'title' => "Contacta con nosotros",
                "description" => "Otra creación de Welfare"
            )
        );
        View::render('contacto');
        View::render('template/fin');
    });






