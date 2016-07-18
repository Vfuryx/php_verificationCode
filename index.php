<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="index.php" method="post">
    <label for="p1">基本验证码</label>
    <input type="radio" name="p" value="p1" placeholder="">
    <label for="p2">图片验证码</label>
    <input type="radio" name="p" value="p2"  placeholder="">
    <label for="p3">汉字验证码</label>
    <input type="radio" name="p" value="p3"  placeholder="">
    <input type="submit" value="提交">
</form>
</body>
</html>

<?php
if(isset($_REQUEST['p'])):
    $con=$_REQUEST['p'];
    if($con=='p1'):
        require_once('./form1.php');
    elseif($con=='p2'):
        require_once('./form2.php');
    elseif($con=='p3'):
        require_once ('./form3.php');
    endif;
endif;
?>