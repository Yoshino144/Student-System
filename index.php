<!doctype html>

<?php
session_start();
//echo "sessions:" . $_SESSION['username'];
if ($_SESSION['username'] == "" || $_SESSION['username'] == " ")
    header("location:login.php");

?>

<html>

<head>
    <meta charset="utf-8">
    <title>首 页</title>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
    <link href="css/index.css" rel="stylesheet" type="text/css">
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <style>
        #con{
            height: 500px;
        }
    </style>
</head>

<body>

    
    <div id="nav">
        <p id="text_nav">MENU</p>
        <div id="menu">
            <a id="menu-u0" href="index.php">
                <img id="img-u0" src="img/u0.png"></img>
                <p id="text-u0">首 页</p>
            </a>
            <a id="menu-u1" href="admin.php">
                <img id="img-u1" src="img/u1-1.png"></img>
                <p id="text-u1">管理员管理</p>
            </a>
            <a id="menu-u2" href="college.php">
                <img id="img-u2" src="img/u2-2.png"></img>
                <p id="text-u2">学院管理</p>
            </a>
            <a id="menu-u3" href="major.php">
                <img id="img-u3" src="img/u3-3.png"></img>
                <p id="text-u3">专业管理</p>
            </a>
            <a id="menu-u4" href="class.php">
                <img id="img-u4" src="img/u4-4.png"></img>
                <p id="text-u4">班级管理</p>
            </a>
            <a id="menu-u5" href="student.php">
                <img id="img-u5" src="img/u5-5.png"></img>
                <p id="text-u5">学生信息管理</p>
            </a>
        </div>
    </div>
    
    <div id="dw">
        <div id="head">
            <img id="img_head" src="img/lie.png">
            <p id="user-text"  ><?php echo "Hi," . $_SESSION['username']; ?> </p>
<!--            <a id="exit-text" href="login.php" style="color: #57585d" >退出</a>-->
        </div>
        <div id="con">
        </div>
    </div>                
        
   
</body>

</html>