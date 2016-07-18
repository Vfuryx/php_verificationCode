<?php
    session_start();
    $table =array(
        'pic1'=>'鸟',
        'pic2'=>'猫',
        'pic3'=>'鱼',
        'pic4'=>'狗'
    );
    $rand =rand(1,4);
    $_SESSION['authcode']=$table['pic'.$rand];

    $fire = dirname(__FILE__).'\\images\\pic'.$rand.'.jpg';

    $content =file_get_contents($fire);
    header('content-type:image/jpg');
    echo $content;