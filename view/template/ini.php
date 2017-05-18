<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fundación Tarahumara - <?php echo $_VIEW['title']; ?></title>
    <meta name="description" content="<?php echo $_VIEW['description']; ?>" />
    <link href="source/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="source/css/general.css" rel="stylesheet">
    
  </head>
  <body>
    <header>
        <div id="top-nav">
            <a href="#">
                <img src="source/images/logo/logo.gif" alt="fundacion tarahumara" id="logo">
            </a>
            <nav id="navigator">
                <?php View::render('template/menu'); ?>
            </nav>
            <div id="donabutton" width="138" height="100" style="padding-top:1rem;min-width:138px;">
                <div>
                    <a href="#"><img src="source/images/dona/lface.png" alt="" style="padding:.2rem;"></a>
                    <a href="#"><img src="source/images/dona/ltwitter.png" alt="" style="padding:.2rem;"></a>
                    <a href="#"><img src="source/images/dona/lyoutube.png" alt="" style="padding:.2rem;"></a>
                    <a href="#"><img src="source/images/dona/leng.png" alt="" style="padding:.2rem;"></a>
                </div>
                <a href="#"><img src="source/images/dona/button.png" alt="" style="margin-top:.5rem;"></a>
            </div>
            <a href="#" data-href="#" id="movmenu"> 
                <img src="source/images/menu.png" alt="">
            </a>
        </div>
    </header>
    <div id="movile-nav">
        <li>
            <a href="#Dona">Dona ahora</a>
        </li>
    </div>