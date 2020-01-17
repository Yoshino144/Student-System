<!doctype html>

<?php
session_start();
//echo "sessions:" . $_SESSION['username'];
if ( $_SESSION[ 'username' ] == "" || $_SESSION[ 'username' ] == " " )
    header( "location:login.php" );

?>
<html>
<head>
<meta charset="utf-8">
<title>首 页</title>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script> 
<script type="text/javascript" src="js/index.js"></script>
<link href="css/index.css" rel="stylesheet" type="text/css">
<link href="css/base.css" rel="stylesheet" type="text/css">
    
<link href="js/layui/css/layui.css" rel="stylesheet" media="all">
<script>
        $(document).ready(function () {
            $("#biu1").hide();
            $("#biu2").hide();
            $("#biu3").hide();
            $("#biu4").hide();
            $("#biu5").hide();
            $("#biu6").hide();
            $("#biu7").hide();
            $("#biu8").hide();
            $("#biu9").hide();
            $("#biu10").hide();
            $("#biu11").hide();
            $("#biu12").hide();
            $("#biu13").hide();
            $("#biu14").hide();
            $("#biu15").hide();
            $("#biu16").hide();
            $("#biu17").hide();
            $("#biu18").hide();
            $("#biu19").hide();
            $("#biu20").hide();
            $("#biu21").hide();
            setTimeout(function start(){
                $("#biu1").fadeIn(800,function(){
                    $("#biu1").fadeOut(500,function(){
                        $("#biu2").fadeIn(800,function(){
                            $("#biu2").fadeOut(500,function(){
                                $("#biu3").fadeIn(800,function(){
                                    $("#biu3").fadeOut(500,function(){
                                        $("#biu4").fadeIn(800,function(){
                                            $("#biu4").fadeOut(500,function(){
                                                $("#biu5").fadeIn(800,function(){
                                                    $("#biu5").fadeOut(500,function(){
                                                        $("#biu6").fadeIn(800,function(){
                                                            $("#biu6").fadeOut(500,function(){
                        $("#biu7").fadeIn(800,function(){
                            $("#biu7").fadeOut(500,function(){
                                $("#biu8").fadeIn(800,function(){
                                    $("#biu8").fadeOut(500,function(){
                                        $("#biu9").fadeIn(800,function(){
                                            $("#biu9").fadeOut(500,function(){
                                                $("#biu10").fadeIn(800,function(){
                                                    $("#biu10").fadeOut(500,function(){
                                                        $("#biu11").fadeIn(800,function(){
                                                            $("#biu11").fadeOut(500,function(){
                        $("#biu12").fadeIn(800,function(){
                            $("#biu12").fadeOut(500,function(){
                                $("#biu13").fadeIn(800,function(){
                                    $("#biu13").fadeOut(500,function(){
                                        $("#biu14").fadeIn(800,function(){
                                            $("#biu14").fadeOut(500,function(){
                                                $("#biu15").fadeIn(800,function(){
                                                    $("#biu15").fadeOut(500,function(){
                                                        $("#biu16").fadeIn(800,function(){
                                                            $("#biu16").fadeOut(500,function(){
                        $("#biu17").fadeIn(800,function(){
                            $("#biu17").fadeOut(500,function(){
                                $("#biu18").fadeIn(800,function(){
                                    $("#biu18").fadeOut(500,function(){
                                        $("#biu19").fadeIn(800,function(){
                                            $("#biu19").fadeOut(500,function(){
                                                $("#biu20").fadeIn(800,function(){
                                                    $("#biu20").fadeOut(500,function(){
                                                        $("#biu21").fadeIn(800,function(){
                                                            $("#biu21").fadeOut(500,function(){
                                                                start();
                        });});});});});});});});});});});});});});});});});});});});}); 
                        });});});});});});});});});});});});});});});});});});});});});},500);});
    </script>
<style>
#con {
    height: 500px;
}
#waao {
    background-color: #ffffff;
    position: absolute;
    width: 70%;
    margin-left: 4.2%;
    top: 120px;
}
#biu1 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #1976d2;
}
#biu2 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #0097a7;
}
#biu3 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #388e3c;
}
#biu4 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #f57c00;
}
#biu5 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #e64a19;
}
#biu6 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #c2185b;
}
#biu7 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #1976d2;
}
#biu8 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #0097a7;
}
#biu9 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #388e3c;
}
#biu10 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #f57c00;
}
#biu11 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #e64a19;
}
#biu12 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #c2185b;
}
#biu13 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #1976d2;
}
#biu14 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #0097a7;
}
#biu15 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #388e3c;
}
#biu16 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #f57c00;
}
#biu17 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #e64a19;
}
#biu18 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #c2185b;
}
#biu19 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #f57c00;
}
#biu20 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #e64a19;
}
#biu21 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 80px;
    text-align: center;
    margin: 0 auto;
    color: #c2185b;
}
#waya {
    background-color: #123456;
    position: absolute;
    width: 70%;
    height: 330px;
    margin-left: 4.2%;
    top: 280px;
}
</style>
</head>

<body>
<div id="nav">
    <p id="text_nav">MENU</p>
    <div id="menu"> <a id="menu-u0" href="index.php"> <img id="img-u0" src="img/u0.png" class="layui-anim layui-anim-up"></img>
        <p id="text-u0" class="layui-anim layui-anim-up" >首 页</p>
        </a> <a id="menu-u1" href="admin.php"> <img id="img-u1" src="img/u1-1.png" ></img>
        <p id="text-u1">管理员管理</p>
        </a> <a id="menu-u2" href="college.php"> <img id="img-u2" src="img/u2-2.png"></img>
        <p id="text-u2">学院管理</p>
        </a> <a id="menu-u3" href="major.php"> <img id="img-u3" src="img/u3-3.png"></img>
        <p id="text-u3">专业管理</p>
        </a> <a id="menu-u4" href="class.php"> <img id="img-u4" src="img/u4-4.png"></img>
        <p id="text-u4">班级管理</p>
        </a> <a id="menu-u5" href="student.php"> <img id="img-u5" src="img/u5-5.png"></img>
        <p id="text-u5">学生信息管理</p>
        </a> </div>
</div>
<div id="dw">
    <div id="head"> <img id="img_head" src="img/lie.png">
        <p id="user-text"  ><?php echo "Hi," . $_SESSION['username']; ?> </p>
        <!--            <a id="exit-text" href="login.php" style="color: #57585d" >退出</a>--> 
        <img src="img/more.png" id="head-more"> </div>
    <div id="con" style="height: 605px" >
        <div id="waao">
            <h1 id="biu1">Hi~ o(*￣▽￣*)ブ</h1>
            <h1 id="biu2">欢迎你＼( ＾∀＾）</h1>
            <h1 id="biu3">ฅ( ̳• ◡ • ̳)ฅ</h1>
            <h1 id="biu4">๑乛◡乛๑</h1>
            <h1 id="biu5">(｡◕ˇ∀ˇ◕）</h1>
            <h1 id="biu6">ʕ •ᴥ•ʔ</h1>
            <h1 id="biu7">(*´▽`*)ヽ(●´∀`●)ﾉ</h1>
            <h1 id="biu8">(◍•͈⌔•͈◍)</h1>
            <h1 id="biu9">……\ ( > < ) /</h1>
            <h1 id="biu10">(๑¯◡¯๑)</h1>
            <h1 id="biu11">o(^▽^)o</h1>
            <h1 id="biu12">╮(﹀_﹀”)╭</h1>
            <h1 id="biu13">(=ＴェＴ=)</h1>
            <h1 id="biu14">⊂((≧⊥≦))⊃</h1>
            <h1 id="biu15">ε(┬┬﹏┬┬)3</h1>
            <h1 id="biu16">(╯‵□′)╯炸弹！•••*～●</h1>
            <h1 id="biu17">ଘ(੭ˊᵕˋ)੭* ੈ✩‧₊˚</h1>
            <h1 id="biu18">✧*｡٩(ˊωˋ*)و✧*｡</h1>
            <h1 id="biu19">✧( ु•⌄• )◞◟( •⌄• ू )✧</h1>
            <h1 id="biu20">╭(●｀∀′●)╯╰(●’◡’●)╮</h1>
            <h1 id="biu21">///•A•///</h1>
        </div>
        <div id="waya">
            1    
        </div>
    </div>
    <div id="low">
        <div id="bot">
            <p style="color: #98a6ad; font-size: 17px; margin-left: 35px;margin-top: 15px;">2020 © STU SYS - Powered by PC - Theme by PC - Version 3.5</p>
        </div>
    </div>
</div>
<div id="more"> <a href="login.php" style="text-decoration:none;"> <img src="img/exit.png" id="exit-img">
    <p id="exit-text">退出系统</p>
    </a> </div>
</body>
</html>