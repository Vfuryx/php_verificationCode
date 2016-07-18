<?php
    if(isset($_REQUEST['authcode'])){
        session_start();
        if($_REQUEST['authcode']==$_SESSION['authcode']){
            echo '<p>输入正确</p>';}
        else{
            echo '<p>输入错误</p>';
            echo $_SESSION['authcode'];
        }
        exit();
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form method="post" action="./form1.php">
    <label>图片</label>
    <img id="image" src="./2.1.php?r=<?PHP echo rand(); ?>" border="1"  alt="">
    <p>请输入图片的内容：
        <input type="text" name="authcode" value="" placeholder="">
        <a href="javascript:void(0)" onclick="document.getElementById('image').src='./2.1.php?r='+Math.random()" >看不清</a>
    </p>
    <p><input type="submit" value="提交" style="padding:6px 20px;"></p>
</form>
</body>
</html>
