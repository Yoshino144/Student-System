<!doctype html>

<?php
session_start();
//echo "sessions:" . $_SESSION['username'];
if ($_SESSION['username'] == "" || $_SESSION['username'] == " ")
    header("location:login.php");

    $serve = 'localhost:3306';
    $username = 'root';
    $password = 'root';
    $dbname = 'school';
    $link = mysqli_connect($serve,$username,$password,$dbname);
    mysqli_set_charset($link,'UTF-8');
    $ming='select * from college';
    $result = mysqli_query($link,$ming);
?>

<html>

<head>
    <meta charset="utf-8">
    <title>学院管理</title>
    <script type="text/javascript" src="js/layui/layui.all.js"></script>
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <link href="css/college.css" rel="stylesheet" type="text/css">
    <link href="css/base.css" rel="stylesheet" type="text/css">
    <link href="js/layui/css/layui.css" rel="stylesheet" media="all">
    <script>
        function delete_college(id){
    var r=confirm("是否确认删除"+id);
    if (r==true)
    {
        window.location.href = 'http://localhost/pro/php/operation.php?operation=deletecollege&id=' + id;
    }
}

function modify_college(id){
    window.location.href = 'http://localhost/pro/php/modifycollege.php?operation=modify&id=' + id;
}
        
        $(document).ready(function () {
    $("#more").hide();
    $("#head-more,#user-text").mouseover(function () {
        $("#more").fadeIn();
    });
    
    $("#head-more,#user-text").mouseout(function () {
        setTimeout(function () {
            $("#more").fadeOut();
        },1000);
    });
    
    $("#text_nav").mouseover(function () {
        $("#text_nav").animate({fontSize:'30px',left: '80px',top: '18px'});
    });
    
    $("#text_nav").mouseout(function () {
        $("#text_nav").animate({fontSize:'20px',left: '90px',top: '25px'});
    });
    
    $("#img_head").click(function () {
        if ($("#nav").css("width") == "260px"){
            $("#nav").animate({width: '90px'});
            $("#menu").animate({width: '90px'});
            $("#text_nav").animate({left: '15px'});
            $("#img-u0").animate({width:'40px',height:'40px',top: '22%',left: '15px'});
            $("#img-u1").animate({width:'40px',height:'40px',top: '22%',left: '15px'});
            $("#img-u2").animate({width:'40px',height:'40px',top: '22%',left: '15px'});
            $("#img-u3").animate({width:'40px',height:'40px',top: '22%',left: '15px'});
            $("#img-u4").animate({width:'40px',height:'40px',top: '22%',left: '15px'});
            $("#img-u5").animate({width:'40px',height:'40px',top: '22%',left: '15px'});
            $("#menu-u0").animate({width: '70px'});
            $("#menu-u1").animate({width: '70px'});
            $("#menu-u2").animate({width: '70px'});
            $("#menu-u3").animate({width: '70px'});
            $("#menu-u4").animate({width: '70px'});
            $("#menu-u5").animate({width: '70px'});
            $("#text-u0").hide();
            $("#text-u1").hide();
            $("#text-u2").hide();
            $("#text-u3").hide();
            $("#text-u4").hide();
            $("#text-u5").hide();
            $("#dw").animate({marginLeft:90},
                            function aa(){
                table.resize('atable');
            });
        }
        else{
            $("#nav").animate({ width: '260px'});
            $("#menu").animate({width: '260px'});
            $("#dw").animate({marginLeft:260});
            $("#img-u0").animate({width:'30px',height:'30px',top: '31%',left: '20px'});
            $("#img-u1").animate({width:'30px',height:'30px',top: '31%',left: '20px'});
            $("#img-u2").animate({width:'30px',height:'30px',top: '31%',left: '20px'});
            $("#img-u3").animate({width:'30px',height:'30px',top: '31%',left: '20px'});
            $("#img-u4").animate({width:'30px',height:'30px',top: '31%',left: '20px'});
            $("#img-u5").animate({width:'30px',height:'30px',top: '31%',left: '20px'});
            $("#menu-u0").animate({width: '240px'});
            $("#menu-u1").animate({width: '240px'});
            $("#menu-u2").animate({width: '240px'});
            $("#menu-u3").animate({width: '240px'});
            $("#menu-u4").animate({width: '240px'});
            $("#text_nav").animate({left: '90px'});
            $("#menu-u5").animate({width: '240px'},
            function showtext(){
            $("#text-u0").show();
            $("#text-u1").show();
            $("#text-u2").show();
            $("#text-u3").show();
            $("#text-u4").show();
            $("#text-u5").show();
            table.resize('atable');
            });
        }
    });
    
    
});

    </script>
</head>

<body>

    <div id="nav">
        <p id="text_nav">MENU</p>
        <div id="menu">
            <a id="menu-u0" href="index.php">
                <img id="img-u0" src="img/u0-0.png"></img>
                <p id="text-u0">首 页</p>
            </a>
            <a id="menu-u1" href="admin.php">
                <img id="img-u1" src="img/u1-1.png"></img>
                <p id="text-u1">管理员管理</p>
            </a>
            <a id="menu-u2" href="college.php">
                <img id="img-u2" src="img/u2.png"></img>
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
            <img src="img/more.png" id="head-more">
        </div>
        <div id="con">
            <p id="tda">学院管理</p>
        </div>
        
        <div id="can_title" >
            <h2 id="can_text">修改添加学院信息</h2>
            <p id="can_text2">谨慎修改</p>
        </div><a href="php/insertcollege.php">
        <img src="img/add.png" id="can_img" ></img></a>
        
        <div id="can">
            <div id="ccan">
        <table lay-filter="demo" id="atable">
            <thead>
            <tr>
                <th lay-data="{field:'id', sort:true ,width:100}">序号</th>
                <th lay-data="{field:'username'}">学院名</th>
                <th lay-data="{field:'ct', sort:true}">创建时间</th>
                <th lay-data="{field:'lt', sort:true}">修改时间</th>
                <th lay-data="{field:'cz',width:100}">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php  
                while( $row = mysqli_fetch_array($result) ){
                    if( $row['delete_flag'] ==1){
                        echo '<tr>';
                        echo '<td>' . $row['id'] . '</td>';
                        echo '<td>' . $row['college_name'] . '</td>';
                        echo '<td>' . $row['c_time'] . '</td>';
                        echo '<td>' . $row['u_time'] . '</td>';
                        echo '<td><a href ="javascript:void(0);" onclick ="modify_college(' . $row['id']. ')">
                              <img id="modify-img" src="img/modify_c.png"></a>
                              &nbsp;
                              <a href ="javascript:void(0);" onclick ="delete_college(' .$row['id'] . ')">
                              <img id="delete-img" src="img/delete_c.png"></a>
                              </td>';
                        echo '</tr>';
                    }
                }
            ?>
                </tbody>
        </table>
           <script>
               layui.table.init('demo', {
                   limit:10,
                   page:true,
                }); 
               layui.jquery(this).addClass('layui-btn-disabled');
                </script>
        </div>
</div>
    </div>                 
        
    <div id="more">
        <a href="login.php" style="text-decoration:none;">
            <img src="img/exit.png" id="exit-img">
                <p id="exit-text">退出系统</p>
            </a>
    </div>
    
</body>

</html>