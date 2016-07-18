<?php

session_start();

$image =imagecreatetruecolor(100,30);
$color2=imagecolorallocate($image,255,255,255);
imagefill($image,0,0,$color2);

$code = '';

for($i=0;$i<4;++$i):
    $color2=imagecolorallocate($image,rand(0,120),rand(0,120),rand(0,120));
    $x=$i*100/4+20/($i+1)+rand(0,5);
    $y=rand(0,10);
    $arr1=array_merge(range('a','z'),range('A','Z'),range('0','9'));
    $new_key = array_rand($arr1,4);
    $content=$arr1[$new_key[$i]];

    $code.=$content;

    imagestring($image,5,$x,$y,$content,$color2);
    endfor;

$_SESSION['authcode']=$code;

for($i=0;$i<=200;++$i):
    $color3=imagecolorallocate($image,rand(100,150),rand(100,150),rand(100,150));
    imagesetpixel($image,rand(0,99),rand(0,29),$color3);
    endfor;
for($i=0;$i<4;++$i):
    $color3=imagecolorallocate($image,rand(100,200),rand(100,200),rand(100,200));
    imageline($image,rand(0,99),rand(0,29),rand(0,99),rand(0,29),$color3);
    endfor;

header("Content-type: image/png");
imagepng($image);
imagedestroy($image);

