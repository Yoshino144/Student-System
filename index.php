<!doctype html>

<?php
session_start();
//echo "sessions:" . $_SESSION['username'];
if ( $_SESSION[ 'username' ] == "" || $_SESSION[ 'username' ] == " " )
    header( "location:login.php" );

$serve = 'localhost:3306';
$username = 'root';
$password = 'root';
$dbname = 'school';
$link = mysqli_connect( $serve, $username, $password, $dbname );
mysqli_set_charset( $link, 'UTF-8' );
$ming = 'select * from cz order by num desc';
$result = mysqli_query( $link, $ming );
?>
<html>
<head>
<meta charset="utf-8">
<title>首 页</title>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script> 
<script type="text/javascript" src="js/index.js"></script> 
<script src="js/layui/layui.all.js" charset="utf-8"></script>
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
    width: 40%;
    height: 94px;
    margin-left: 600px;
    margin-top: -10px;
    top: 80px;
    border-radius: 4px;
    box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.1);
    padding-top: 7px;
}
#biu1 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 60px;
    text-align: center;
    margin: 0 auto;
    color: #1976d2;
}
#biu2 {
    font-family: '微软雅黑';
    background-color: #ffffff;
    font-size: 60px;
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
    background-color: #ffffff;
    position: absolute;
    width: 525px;
    height: 420px;
    margin-left: 10px;
    ;
    top: 0px;
    border-radius: 4px;
}
.aabbcc::-webkit-scrollbar {
width: 16px;
height: 16px;
background-color: #f5f5f5;
}
.aabbcc::-webkit-scrollbar-track {
-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
border-radius: 10px;
background-color: #f5f5f5;
}
.aabbcc::-webkit-scrollbar-thumb {
height: 20px;
border-radius: 10px;
-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
background-color: #009688;
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
    <div id="con" style="height: 430px; width: 540px ;" class="layui-anim layui-anim-scale">
        <div id="waya" >
            <fieldset class="layui-elem-field layui-field-title" >
                <legend style="margin-top: 0px;">最新消息</legend>
            </fieldset>
            <ul class="aabbcc" id="LAY_demo1" style="list-style-type: disc;height: 360px;overflow: auto;width: 500px;margin-top:0px;margin-left: 15px;padding-left: 10px;">
                <li class="layui-timeline-item"> <i class="layui-icon layui-timeline-axis"></i>
                    <div class="layui-timeline-content layui-text">
                        <div class="layui-timeline-title">
                            <?php $row = mysqli_fetch_array( $result );echo '<b>' . $row['ct']. '</b> &nbsp;&nbsp;' . $row['cz'];?>
                        </div>
                    </div>
                </li>
                <li class="layui-timeline-item"> <i class="layui-icon layui-timeline-axis"></i>
                    <div class="layui-timeline-content layui-text">
                        <div class="layui-timeline-title">
                            <?php $row = mysqli_fetch_array( $result );echo '<b>' . $row['ct']. '</b> &nbsp;&nbsp;' . $row['cz'];?>
                        </div>
                    </div>
                </li>
                <li class="layui-timeline-item"> <i class="layui-icon layui-timeline-axis"></i>
                    <div class="layui-timeline-content layui-text">
                        <div class="layui-timeline-title">
                            <?php $row = mysqli_fetch_array( $result );echo '<b>' . $row['ct']. '</b> &nbsp;&nbsp;' . $row['cz'];?>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <div id="waao" class="layui-anim layui-anim-scale">
        <h1 id="biu1" style="font-size: 60px;">Hi~ o(*￣▽￣*)ブ</h1>
        <h1 id="biu2" style="font-size: 60px;">欢迎你＼( ＾∀＾）</h1>
        <h1 id="biu3" style="font-size: 60px;">ฅ( ̳• ◡ • ̳)ฅ</h1>
        <h1 id="biu4" style="font-size: 60px;">๑乛◡乛๑</h1>
        <h1 id="biu5" style="font-size: 60px;">(｡◕ˇ∀ˇ◕）</h1>
        <h1 id="biu6" style="font-size: 60px;">ʕ •ᴥ•ʔ</h1>
        <h1 id="biu7" style="font-size: 60px;">(*´▽`*)</h1>
        <h1 id="biu8" style="font-size: 60px;">(◍•͈⌔•͈◍)</h1>
        <h1 id="biu9" style="font-size: 60px;">……\ ( > < ) /</h1>
        <h1 id="biu10" style="font-size: 60px;">(๑¯◡¯๑)</h1>
        <h1 id="biu11" style="font-size: 60px;">o(^▽^)o</h1>
        <h1 id="biu12" style="font-size: 60px;">╮(﹀_﹀”)╭</h1>
        <h1 id="biu13" style="font-size: 60px;">(=ＴェＴ=)</h1>
        <h1 id="biu14" style="font-size: 60px;">⊂((≧⊥≦))⊃</h1>
        <h1 id="biu15" style="font-size: 60px;">ε(┬┬﹏┬┬)3</h1>
        <h1 id="biu16" style="font-size: 60px;">(╯‵□′)╯炸弹</h1>
        <h1 id="biu17" style="font-size: 60px;">ଘ(੭ˊᵕˋ)੭*</h1>
        <h1 id="biu18" style="font-size: 60px;">✧٩(ˊωˋ*)و✧</h1>
        <h1 id="biu19" style="font-size: 60px;">✧( ु•⌄• )◞</h1>
        <h1 id="biu20" style="font-size: 60px;">╭(●｀∀′●)╯</h1>
        <h1 id="biu21" style="font-size: 60px;">///•A•///</h1>
    </div>
    <div class="layui-anim layui-anim-up" style="
    background-color: #ffffff;
    width: 540px;
    height: 162px;
    margin-left: 35px;
    margin-top: 25px;
    box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.1);
    z-index: 99;
    border-radius: 4px;">
        <p style="height: 1px;">&nbsp;</p>
        <fieldset class="layui-elem-field layui-field-title" >
            <legend>主题颜色</legend>
        </fieldset>
        <div style="margin-left: 75px;">
            <form class="layui-form" action="">
                <div class="layui-form-item">
                    <div class="layui-input-inline" style="width: 120px;">
                        <input type="text" value="" placeholder="请选择颜色" class="layui-input" id="test-form-input">
                    </div>
                    <div class="layui-inline" style="left: -11px;">
                        <div id="test-form"></div>
                    </div>
                </div>
            </form>
        </div>
        <form class="layui-form" action="" style="position: absolute;top:58px;left:305px;z-index: 120">
            <div class="layui-form-item">
                <div class="layui-input-inline" style="width: 120px;">
                    <input type="text" value="" placeholder="请选择颜色" class="layui-input" id="test-form-input2">
                </div>
                <div class="layui-inline" style="left: -11px;">
                    <div id="test-form2"></div>
                </div>
            </div>
        </form>
        <p style="color:#a4a6ad;position: absolute;top:118px;left:105px;z-index: 120; font-size: 14px;">在这里你可以分别修改此页面菜单栏及头部主题颜色</p>
    </div>
    <div class="layui-anim layui-anim-up" id="rightdiv" style="
    position: absolute;
    top:200px;
    left:860px;
    background-color: #ffffff;
    width: 40%;
    height: 487px;
    box-shadow: 2px 2px 20px rgba(0, 0, 0, 0.1);
    z-index: 99;
    border-radius: 4px;"></div>
    <div id="low" style=" padding-top: 25px;">
        <div id="bot">
            <p style="color: #98a6ad; font-size: 17px; margin-left: 35px;margin-top: 15px;">2020 © STU SYS - Powered by PC - Theme by PC - Version 4.0!!!!</p>
        </div>
    </div>
</div>
<div id="more"> <a href="login.php" style="text-decoration:none;"> <img src="img/exit.png" id="exit-img">
    <p id="exit-text" >退出系统</p>
    </a> </div>
<script>
        var arr = eval(<?php echo json_encode(mysqli_fetch_all($result));?>);
        console.log("123");
        console.log(arr);
        console.log(arr.length);
        var arrlength=arr.length;
        
layui.use('flow', function(){
  var flow = layui.flow;
 var j=0;
  flow.load({
    elem: '#LAY_demo1'
    ,scrollElem: '#LAY_demo1' 
    ,done: function(page, next){ 
       
      setTimeout(function(){
        var lis = [];
        for(var i = 0; i < 3; i++){
            console.log(j + arr[j][1] + arr[j][0]);
                lis.push('<li class="layui-timeline-item"><i class="layui-icon layui-timeline-axis"></i><div class="layui-timeline-content layui-text"><div class="layui-timeline-title"><b>'+arr[j][1]+'</b> &nbsp;&nbsp;'+arr[j][0]+'</div></div></li>');j+=1;
            
        }
        next(lis.join(''), page < 3); 
      }, 500);
        
    }
  });
  
  
});
        
  layui.use('colorpicker', function(){
  var $ = layui.$
  ,colorpicker = layui.colorpicker;    
  colorpicker.render({
    elem: '#test-form'
    ,color: '#6777ef'
    ,done: function(color){
      $('#test-form-input').val(color);
    }
    ,change: function(color){
      console.log(color);
        $("#menu-u0").css("background-color",color);
    }
  });
      
      var $ = layui.$
  ,colorpicker = layui.colorpicker;    
  colorpicker.render({
    elem: '#test-form2'
    ,color: '#6777ef'
    ,done: function(color){
      $('#test-form-input2').val(color);
    }
    ,change: function(color){
      console.log(color);
        $("#head").css("background-color",color);
    }
  });
  });
</script>
</body>
</html>