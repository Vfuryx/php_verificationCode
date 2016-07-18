<?php
/**
 * Created by PhpStorm.
 * User: fury
 * Date: 2016/7/17
 * Time: 23:22
 */


session_start();//开启seesion

$image = imagecreatetruecolor(200,60);//定义颜色
$bgcolor =imagecolorallocate($image,255,255,255);
imagefill($image,0,0,$bgcolor);//填充

$strs='绝学无忧唯之与阿相去几何善之与恶相去若何人之所畏不可不畏荒兮其未央哉众人熙熙如享太牢如春登台我独泊兮其未兆如婴儿之未孩儡儡兮若无所归众人皆有馀而我独若遗我愚人之心也哉沌沌兮俗人昭昭我独昏昏俗人察察我独闷闷众人皆有以而我独顽且鄙我独异於人而贵食母';
$strs_arr=str_split($strs,3);//分割字符串
//header('content-type:text/html ; charset=utf-8');
//var_dump($strs_arr);
$font_size=rand(25,30);

$code='';

for($i=0;$i<4;++$i):
    $fontcolor =imagecolorallocate($image,rand(0,120),rand(0,120),rand(0,120));
    $x=$i*200/4+rand(10,15);
    $y=rand(35,40);
    $deg_rand=rand(-60,60);
    $content=$strs_arr[rand(0,count($strs_arr)-1)];
    $font_family = 'ppt'.rand(1,2).'.ttf';

    $code.=$content;

    imagettftext($image,$font_size,$deg_rand,$x,$y,$fontcolor,$font_family,$content);//生成字

    endfor;

$_SESSION['authcode']=$code;//session记录

for($i=0;$i<200;++$i)://生成干扰点
    $color=imagecolorallocate($image,rand(50,150),rand(50,150),rand(50,150));
    imagesetpixel($image,rand(0,199),rand(0,59),$color);
    endfor;
for($i=0;$i<4;++$i)://生成干扰线
    $color=imagecolorallocate($image,rand(100,200),rand(100,200),rand(100,200));
    imageline($image,rand(0,199),rand(0,59),rand(0,199),rand(0,59),$color);
    endfor;

header('content-type:image/jpg');//头
imagejpeg($image);//输出
imagedestroy($image);//销毁